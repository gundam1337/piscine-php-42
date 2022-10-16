<?php
require_once('auth.php');
session_start();
$user_name = $_POST["login"];
$password = $_POST["passwd"];


if ($user_name && $password && auth($user_name,$password))
{
    $_SESSION["loggued_on_user"] = $user_name;
    echo "OK \n";
    ?>
    <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>42Chat</title>
        </head>
        <body>
            <iframe name="chat" src="chat.php" width="100%" height="350px"></iframe>
            <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
        </body>
        </html>
    <?php
        
}
else {
    $_SESSION["loggued_on_user"] = "";

    echo "ERROR \n";
}


