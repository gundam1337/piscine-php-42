
<?php

//http://day04.ex00.42.fr/
    session_start();
    if($_GET['submit'] == "OK")
    {
        $_SESSION['login'] = $_GET['login'];
		$_SESSION['password'] = $_GET['password'];
    }
   
?>


