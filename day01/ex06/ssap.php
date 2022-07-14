#!/usr/bin/php
<?php
$i = 1;
$array = array();
if ($argc >1)
{
    foreach($argv as $key =>$value)
    {
       if ($i < $argc )
        {
            $value = preg_split("/ +/",trim($argv[$i]));
            $array = array_merge($array, $value);
            $i++;
        }
    }
   sort($array);
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