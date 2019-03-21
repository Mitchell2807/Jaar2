<?php
abstract class Figure2
{
    private $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    abstract public function draw();
}


class Figures extends Figure2
{
    private $length;
    private $height;
    public function __construct($color, $length, $height)
    {
        parent::__construct($color);
        $this->length = $length;
        $this->height = $height;
    }

    public function draw()
    {
        // met length zorgen dat je de vierkant hier tekent
        //square
        $figures = "<!DOCTYPE html>
<html>
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>
.square {
  height: ".$this->length."px;
  width: ".$this->length."px;
  background-color: red;
}

.circle {
  height: ".$this->length."px;
  width: ".$this->length."px;
  background-color: blue;
  border-radius: 50%;
}

.triangle {
	width: 0;
	height: 0;
	border-left: ".$this->length."px solid transparent;
	border-right: ".$this->length."px solid transparent;
	border-bottom: ".$this->length."px solid yellow;
}

.rectangle {
  height: ".$this->length."px;
  width: ".$this->height."px;
  background-color: green;
}

*{
float:left;
margin:10px;
}

</style>
</head>
<body>

<div class=\"square\"></div>

<div class=\"circle\"></div>

<div class=\"triangle\"></div>

<div class=\"rectangle\"></div>


</body>
</html> ";


            //circle
        return $figures;

    }
}

$figuur1 = new Figures('$this->color', 100,200);
print $figuur1->draw();
