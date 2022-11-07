<?php

abstract class Fighter 
{
    private $_jobe;

    public function __construct($j)
    {
        $_jobe = $j;
    }

    abstract function fight($target);
}



?>