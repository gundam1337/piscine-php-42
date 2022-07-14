#!/usr/bin/php
<?php

function ft_is_sort($array)
{
    return sort($array);
}
$tab = array("!/@#;^", "42", "Hello World", "hi", "vZzZzZzZ");

if (ft_is_sort($tab))
echo "The array is sorted\n";
else
echo "The array is not sorted\n";
?>