#!/usr/bin/php

<?php

$fp = fopen("php://stdin", "r");

while (feof($fp) == false)
{
    echo 'Enter a number: ';
    $var = trim(fgets($fp));
    if (is_numeric($var) == true )
    if ($var % 2 == 0)
        echo "The number ",$var, " is even \n";
    else
        echo "The number ",$var, " is odd \n";
    else
    echo "'", $var,"'" ,"is not a number \n";
}
 
?>