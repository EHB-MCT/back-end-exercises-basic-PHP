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
function berekenOppervlakteCirkel($r){
    global $counter;
    $counter++;
    return pi() * $r * $r;
}
function berekenOppervlakteDriehoek($basis, $hoogte){
    global $counter;
    $counter++;
    return ($basis * $hoogte) /2;
}
function berekenOppervlakteVierkant($zijde){
    global $counter;
    $counter++;
    return berekenOppervlakteRechthoek($zijde,$zijde);
}
function berekenOppervlakteRechthoek($zijde1,$zijde2){
    global $counter;
    $counter++;
    return $zijde1 * $zijde2;
}

