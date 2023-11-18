<?php
function is_username($username){
    global $error;
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $username, $matchs)) {
        return false;
    }
    return true;
}
function is_password($password)
{
    global $error;

    $partten = "/^[A-Z]{1}[\w_\.!@#$%^&*()+]{6,32}$/";
    if (!preg_match($partten, $password, $matchs)) {
        return false;
    }
    return true;
}
function show_array($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}