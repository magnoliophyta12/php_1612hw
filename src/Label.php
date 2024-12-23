<?php
namespace App;
class Label extends Control
{
    private $for;

    public function __construct($background, $width, $height, $forObject)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setParentName($forObject);
    }

    function getParentName()
    {
        return $this->for;
    }

    function setParentName($forObject)
    {
        $this->for = $forObject->getName();
    }


}
