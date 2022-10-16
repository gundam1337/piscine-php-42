<?php
require_once('auth.php');
session_start();
$user_name = $_GET["login"];
$password = $_GET["passwd"];


if ($user_name && $password && auth($user_name,$password))
{
    $_SESSION["loggued_on_user"] = $user_name;
    echo "OK \n";
}
$_SESSION["loggued_on_user"] = "";
echo "ERROR \n";
?>