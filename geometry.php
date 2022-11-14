<?php
$counter = 0;
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
    global $counter;
    $counter++;
    // M_PI is a default CONST from PHP for calculations
    return M_PI * $radius * $radius;
}

function calculateSurfaceAreaTriangle($width, $height){
    global $counter;
    $counter++;
    return ($width * $height) /2;
}

function calculateSurfaceAreaSquare($width){
    global $counter;
    $counter++;
    return calculateSurfaceAreaRectangle($width, $width);
}

function calculateSurfaceAreaRectangle($width, $height){
    global $counter;
    $counter++;
    return $width * $height;
}

