<?php

class NightsWatch
{
    public function fight(){

    }
    function recruit($westrosi)
    {
        if (is_a($westrosi, "IFighter"))
        {
            $westrosi->fight();
        }
    }
}
?>