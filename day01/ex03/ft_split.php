#!/usr/bin/php
<?php

function ft_split($var)
{
    $a = trim($var,"  \n\r\t\v" );
    $a = preg_split("/ +/", $a);
    sort($a);
    if (!$a[0])
    {
        echo 'hello';
        return (NULL);
    }
        
    return $a ;
}
?>