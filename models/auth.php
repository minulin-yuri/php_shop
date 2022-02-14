<?php


function auth($login, $pass)
{
    $db = getDb();
    $login = mysqli_real_escape_string($db, strip_tags(stripslashes($login)));
    $row = getOneResult("SELECT * FROM users WHERE login = '{$login}'");
    echo (var_dump($row['password']));
    echo (var_dump($pass));
    if (password_verify($pass, $row['hash'])) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $row['id'];
        return true;
    }
    return false;
}

function is_auth()
{
    if (isset($_COOKIE["hash"])) {
        $hash = $_COOKIE["hash"];
        $db = getDb();
        $row = getOneResult("SELECT * FROM `users` WHERE `hash`='{$hash}'");
        $user = $row['login'];
        if (!empty($user)) {
            $_SESSION['login'] = $user;
        }
    }
    return isset($_SESSION['login']) ? true : false;
}

function get_user()
{
  return $_SESSION['login'];
}