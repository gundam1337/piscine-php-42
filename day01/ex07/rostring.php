#!/usr/bin/php
<?php

if ($argc == 2)
{
    $array = preg_split("/ +/",trim($argv[1]));

    //$head = $array[array_key_first($array)];
    $head = $array[1];
    foreach($array as $key => $value)
    {
        if ($key == array_key_first($array))
            continue;
        echo $value . " ";
    }
    echo $head;
}

?>