<?php

require_once __DIR__ . '/../database.php';
function isValidEmail($email): bool
{
    return (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL));
}

function isUsernameTaken($username): bool
{
    $sql = "SELECT COUNT(*) FROM users WHERE username = ?";
    $stmt = getConnection()->prepare($sql);

    $stmt->bind_param("s", $username);
    $stmt->execute();

    $count = 0;
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    return $count > 0;
}

function isRegistered($email): bool
{
    if (!isValidEmail($email)) {
        return false;
    }

    $statement = getConnection()->prepare("SELECT 1 FROM users WHERE email = ?;");
    $statement->bind_param("s", $email);
    $statement->execute();
    $statement->store_result();
    $exists = $statement->num_rows > 0;
    $statement->close();

    return $exists;
}

function isCorrectPassword($password): bool
{
    $database_password = "test"; //TODO DATABASE STUFF
    $database_password_hash = password_hash($database_password, PASSWORD_BCRYPT);
    return password_verify($password, $database_password_hash);
}

function createUser($email, $hashedPassword, $username)
{
    $id = insertUser($email, $hashedPassword, $username);
    storeUser($id, $email, $username, 'user');
}

function login(string $email, string $password): bool
{
    regenerateSession();
    if (!isValidEmail($email)) {
        return false;
    }

    $sql = "SELECT id, email, username, password_hash, role
            FROM users 
            WHERE email = ?";

    $stmt = getConnection()->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if (!$user) {
        return false;
    }

    if (!password_verify($password, $user['password_hash'])) {
        return false;
    }

    $_SESSION['user'] = [
        'id' => (int)$user['id'],
        'email' => $user['email'],
        'username' => $user['username'],
        'role' => $user['role']
    ];

    return true;
}

function logout()
{
    session_start();
    session_unset();
    session_destroy();
    header("location: /");
    die();
}

?>

