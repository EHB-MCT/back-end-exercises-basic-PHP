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

function calculateSurfaceAreaCircle($radius){
    // M_PI is a default CONST from PHP for calculations
    return M_PI * $radius * $radius;
}

function calculateSurfaceAreaTriangle($width, $height){
    return ($width * $height) /2;
}

function calculateSurfaceAreaSquare($width){
    return calculateSurfaceAreaRectangle($width, $width);
}

function calculateSurfaceAreaRectangle($width, $height){
    return $width * $height;
}

