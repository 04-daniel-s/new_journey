<?php
function isValidEmail($email): bool
{
    return (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL));
}

function isUsernameTaken($username): bool
{
    return 0;
}

function isRegistered($email): bool
{
    if (!isValidEmail($email)) {
        return false;
    }

    return $email == "test@gmail.com";
}

function isCorrectPassword($password): bool
{
    $database_password = "test"; //TODO DATABASE STUFF
    $database_password_hash = password_hash($database_password, PASSWORD_BCRYPT);
    return password_verify($password, $database_password_hash);
}

function createUser()
{
    //TODO CREATE USER IN DB
}

function getUser($email)
{

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

