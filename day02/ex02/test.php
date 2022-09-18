#!/usr/bin/php
<?php
$string  = "2014-02-22";

$pattern = "~(\d{4})-(\d{2})-(\d{2})~";

$result = preg_replace_callback($pattern, "callback", $string);

function callback ($matches) {
    print_r($matches);
    return $matches[3]."-".$matches[2]."-".$matches[1];
}

echo $result;
?>