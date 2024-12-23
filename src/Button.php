<?php
namespace App;
class Button extends Input
{
    private $isSubmit;

    public function __construct($background, $width, $height, $name, $value, $isSubmit)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->setSubmitState($isSubmit);
    }

    function setSubmitState($isSubmit)
    {
        $this->isSubmit = $isSubmit;
    }

    function getSubmitState()
    {
        return $this->isSubmit;
    }


}
