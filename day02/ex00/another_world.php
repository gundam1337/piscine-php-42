#!/usr/bin/php
<?php
    
if ($argc > 2)
    return 0;

    $array = trim($argv[1]);
    $array = preg_split("/ +/", $array);

    foreach ($array as $key =>$value)
    {
        if ($key == array_key_last($array))
        {
            echo $value;
            break;
        }
        echo $value . " ";
    }
       


?>