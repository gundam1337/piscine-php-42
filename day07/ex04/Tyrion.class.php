<?php
require_once "Lannister.class.php";

class Tyrion extends Lannister
{
    function sleepWith($person)
    {
        if ($person instanceof Lannister)
        {
            //if (is_a($person,"Cersei"))
                echo "Not even if I'm drunk !\n";
           // if (is_a($person,"Jaime"))
               // echo "Not even if I'm drunk !\n";
        }
        else 
            echo "Let's do this.\n";
    } 
}

?>