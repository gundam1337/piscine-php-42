<?php
require_once "Lannister.class.php";

class Jaime extends Lannister
{
     function sleepWith($person)
    {
        if ($person instanceof Lannister)
        {
            if (is_a($person,"Cersei"))
                echo "With pleasure, but only in a tower in Winterfell, then.\n";
            if (is_a($person,"Tyrion"))
                echo "Not even if I'm drunk !\n";
        }
        else 
            echo "Let's do this.\n";
    } 
    //instanceof
}

?>