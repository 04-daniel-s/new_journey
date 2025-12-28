<?php
function getConnection()
{
    global $connection;

    if ($connection instanceof mysqli) {
        return $connection;
    }

    $connection = new mysqli("localhost", "root", "", "new_journey");

    if ($connection->connect_error) {
        printf("Connection to database failed: %s\n", $connection->connect_error);
        exit();
    }

    return $connection;
}

function insertUser($email, $hashedPassword, $username, $role)
{
    $mysqli = getConnection();
    $stmt = $mysqli->prepare('INSERT INTO users (email, password_hash, role, username) VALUES (?, ?, ?, ?)');
    $stmt->bind_param("ssss", $email, $hashedPassword, $role, $username);
    $stmt->execute();

    $newId = $stmt->insert_id;
    $stmt->close();

    return (int)$newId;
}

function storeUser($id, $email, $username, $role)
{
    regenerateSession();
    $_SESSION["user"]["id"] = (int)$id;
    $_SESSION["user"]["email"] = $email;
    $_SESSION["user"]["username"] = $username;
    $_SESSION["user"]["role"] = $role;
}
?>

