<?php
function is_username($username)
{
    global $error;

    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $username, $matchs)) {
        return false;
    }
    return true;
}
