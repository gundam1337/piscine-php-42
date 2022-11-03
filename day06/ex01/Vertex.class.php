#!/usr/bin/php
<?php 
require_once "../ex00/Color.class.php";

class Vertex
{
    private  $_x;
    private  $_y;
    private  $_z;
    private  $_w;
    private Color $_color;
    static bool $verbose = false;

    function __construct(array $a)
    {

            $this->_x = $a['x'];
            $this->_y = $a['y'];
            $this->_z = $a['z'];
            if (array_key_exists('w', $a))
			    $this->_w = $a['w'];
            if (array_key_exists('color', $a) && $a['color'] instanceof Color)
                $this->_color = $a['color'];
            else
                $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
            if (Self::$verbose)
                printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n",
                    $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red,
                    $this->_color->green, $this->_color->blue);
    }

    function __destruct()
	{
		if (Self::$verbose)
			printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n",
				$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red,
				$this->_color->green, $this->_color->blue);
	}

    function __toString()
	{
		if (Self::$verbose)
			return (sprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )",
				$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red,
				$this->_color->green, $this->_color->blue));
		return (sprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", 
				$this->_x, $this->_y, $this->_z, $this->_w));
	}

    static  function doc(): void
    {
        $myfile = fopen("Vertex.doc.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("Vertex.doc.txt"));
        fclose($myfile);
    }

    public function getX()
	{
		return $this->_x;
	}

	public function setX($x)
	{
		$this->_x = $x;
	}

	public function getY()
	{
		return $this->_y;
	}

	public function setY($y)
	{
		$this->_y = $y;
	}

	public function getZ()
	{
		return $this->_z;
	}

	public function setZ($z)
	{
		$this->_z = $z;
	}

	public function getW()
	{
		return $this->_w;
	}

	public function setW($w)
	{
		$this->_w = $w;
	}

	public function getColor()
	{
		return $this->_color;
	}

	public function setColor($color)
	{
		$this->_color = $color;
	}
    
}


?>