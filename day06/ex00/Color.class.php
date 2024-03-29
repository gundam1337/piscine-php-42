#!/usr/bin/php
<?php

   class Color
   {
    public  $red;
    public  $green;
    public  $blue;
    static bool $verbose = false;

    public function __construct($array)
	{
        if (isset($array['rgb']))
        {
            $this->red = (($array['rgb'] / 256)/256)%256;
            $this->green = ($array['rgb'] / 256)% 256;
            $this->blue = $array['rgb'] % 256;
        }
        else  if (
            isset($kwargs['red']) &&
            isset($kwargs['green']) &&
            isset($kwargs['blue']))
        {
            $this->red = $array['red'];
            $this->green = $array['green'];
            $this->blue = $array['blue'];
        }
        if (self ::$verbose)
        {
            printf($this . " constructed.\n");
        }
	}

    public function __destruct()
	{
		//...
	}

    public function __tostring() {
        $ret = sprintf("Color( red: %3d, green: %3d, blue: %3d )",
                        $this->red, $this->green, $this->blue);
        return $ret;
    }
    
    
   
    public function add(Color $new_color)
    {
        $color = new Color(array('red'=>$this->red + $new_color->red,
            'green'=>$this->green + $new_color->green,
            'blue'=>$this->blue + $new_color->blue));
        return $color;
    }

    public function sub(Color $new_color)
    {
        $color = new Color(array('red'=>$this->red - $new_color->red,
            'green'=>$this->green - $new_color->green,
            'blue'=>$this->blue - $new_color->blue));
        return $color;
    }

    public function mult($mlt)
    {
        $color = new Color(array('red'=>$this->red *$mlt,'green'=>$this->green*$mlt,'blue'=>$this->blue*$mlt));
        return $color;
    }
   }

?>