<?php

//the url = eXrXpX.day03.ex03.42.fr
if (array_key_exists("action", $_GET))
{
    if ($_GET["action"] == "set" && $_GET["name"] != '' && $_GET["value"] != '')
    {
        $cookie_name = $_GET['name'];
        $cookie_value = $_GET['value'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day
    }
    if($_GET['action'] == "get" && $_GET["name"] != '' && $_GET["value"] != '')
    {
        $cookie_name = $_GET['name'];
        print $_COOKIE[$cookie_name];
    }
    if($_GET['action'] == "del" && $_GET["name"] != '' && $_GET["value"] != '')
    {
        setcookie($tab["name"], '', time() - 3600);   
    }
}
?>

<?php
print_r($_SESSION);
?>