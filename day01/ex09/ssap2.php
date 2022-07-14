#!/usr/bin/php
<?php

function compare($str1, $str2)
{
    $line = "abcdefghijklmnopqrstuvwxyz0123456789!\"
			#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $i = 0;
    while ($i < strlen($str1) || $i < strlen($str2))
    {
        $str1_index = stripos($line,$str1[$i]);
        $str2_index = stripos($line,$str2[$i]);
        if ($str1_index > $str2_index)
            return 1;
        if ($str1_index < $str2_index)
            return -1;
        else
            $i++;
    }
}


$i = 1;
$array = array();
echo $argc;
if ($argc > 1)
{
    foreach($argv as $value)
    {
       if ($i < $argc )
        {
            
            $value = preg_split("/ +/",trim($argv[$i]));
            $array = array_merge($array, $value);
            $i++;
        }
    }

   //usort($array,"compare");
   //sort($array);
    foreach ($array as $key=>$value)
    {
        if ($key == array_key_last($array))
        {
            echo $value ;
            break;
        }
        echo $value."\n";
    }
}
?>