<?php
namespace App;
class Text extends Input
{
    private $placeholder;

    public function __construct($background, $width, $height, $name, $value, $placeholder)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->setPlaceholder($placeholder);
    }

    function getPlaceholder()
    {
        return $this->placeholder;
    }

    function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }


}

