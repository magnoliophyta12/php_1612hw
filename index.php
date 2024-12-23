<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Button;
use App\Label;
use App\Text;

function convertToHTML($control)
{
    if ($control instanceof Button) {
        return "<button style='background: {$control->getBackground()}; width:{$control->getWidth()}; height:{$control->getHeight()}; name='{$control->getName()}'>  {$control->getValue()} </button>";
    } else if ($control instanceof Text) {
        return  "<input type='text' style='background: {$control->getBackground()}; width: {$control->getWidth()}; height: {$control->getHeight()};' name='{$control->getName()}' value='{$control->getValue()}' placeholder='{$control->getPlaceholder()}'>";
    } else if ($control instanceof Label) {
        return "<label for='{$control->getParentName()}' style='background: {$control->getBackground()}; width: {$control->getWidth()}; height: {$control->getHeight()};'> {$control->getParentName()} </label>";
    }
}

$button = new Button("pink", "100px", "50px", "btn", "Send", true);
$text = new Text("white", "100px", "50px", "text", "", "Enter your text");
$label = new Label("gray", "100px", "20px", $text);

echo convertToHTML($button);
echo "<br><br>";
echo convertToHTML($text);
echo "<br><br>";
echo convertToHTML($label);