<?php
//$docent = "Mike";
//$students = array( "s1" => "maarten", "s2" => "Quint");
//$something = true;
//var_dump($counter);
//var_dump($something);
//var_dump($students);
//var_dump($docent);
//var_dump($_SERVER);
//die;

function calculateSurfaceAreaCircle(float $radius): float
{
    // M_PI is a default CONST from PHP for calculations
    return M_PI * $radius * $radius;
}

function calculateSurfaceAreaTriangle(float $width, float $height): float
{
    return ($width * $height) / 2;
}

function calculateSurfaceAreaSquare(float $width): float
{
    return calculateSurfaceAreaRectangle($width, $width);
}

function calculateSurfaceAreaRectangle(float $width, $height): float
{
    return $width * $height;
}

