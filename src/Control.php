<?php
namespace App;
class Control
{
    private $background;
    private $width;
    private $height;


    function setBackground($background)
    {
        $this->background = $background;
    }

    function getBackground()
    {
        return $this->background;
    }
    function setWidth($width){
        $this->width = $width;
    }
    function getWidth(){
        return $this->width;
    }
    function setHeight($height){
        $this->height = $height;
    }
    function getHeight(){
        return $this->height;
    }
}
