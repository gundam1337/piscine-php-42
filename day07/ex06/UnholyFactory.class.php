<?php

class UnholyFactory
{
    static $_track_footsolider = 0;
    static $_track_archer = 0;
    static $_track_assassin = 0;

    public function absorb($someone)
    {
        if (is_a($someone,"Footsoldier"))
        {
            if (self::$_track_footsolider == 0 )
            {
                self::$_track_footsolider++;
                echo "(Factory absorbed a fighter of type foot soldier)\n";
            }
            else 
                echo "(Factory already absorbed a fighter of type foot soldier)\n";
        }

        else if (is_a($someone,"Archer"))
        {
            if (self::$_track_archer == 0 )
            {
                self::$_track_archer++;
                echo "(Factory absorbed a fighter of type archer)\n";
            }
               
            else 
                echo "(Factory already absorbed a fighter of type archer)\n";
        }
        else if (is_a($someone,"Assassin"))
        {
            if (self::$_track_assassin == 0 )
            {
                self::$_track_assassin++;
                echo "(Factory absorbed a fighter of type assassin)\n";
            }  
            else 
                echo "(Factory already absorbed a fighter of type assassin)\n";
        }
        else 
            echo "(Factory can't absorb this, it's not a fighter)\n";
        
    }

    public function fabricate($army)
    {
        if (strcmp("foot soldier",$army)==0)
        {
            echo "(Factory fabricates a fighter of type ".$army.")\n";
            return new Footsoldier();
        }
        else if (strcmp("archer",$army)==0)
        {
            echo "(Factory fabricates a fighter of type ".$army.")\n";
            return new Archer();
        }
        else if (strcmp("assassin",$army)==0)
        {
            echo "(Factory fabricates a fighter of type ".$army.")\n";
            return new Assassin();
        }
        else 
        {
            echo "(Factory hasn't absorbed any fighter of type ".$army.")\n";
        }
    }
    public function fight($target) 
    {

    }

}