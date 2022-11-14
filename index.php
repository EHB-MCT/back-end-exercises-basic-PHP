<?php
// Includes
include "geometry.php";
// Requires
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Basic PHP exercises</title>
</head>
<body class="container">
<h1>Session 1 1</h1>
<h2>Pick your exercise</h2>

<select class="form-control" id="list">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
</select>

<div id="oef1">
    <h3>Exercise 1</h3>
    <p>Surface area of a circle with radius 2.2 is <?php echo calculateSurfaceAreaCircle(2.2); ?></p>
</div>
<div id="oef2">
    <h3>Oefening 2</h3>

    <p>Driehoek: <?php echo berekenOppervlakteDriehoek(5, 3); ?></p>
    <p>Vierkant: <?php echo berekenOppervlakteVierkant(7); ?></p>
    <p>Rechthoek: <?php echo berekenOppervlakteRechthoek(9, 7); ?></p>
</div>
<div id="oef3">
    <h3>Oefening 3</h3>
    <p>Driehoek: <?php echo berekenOppervlakteDriehoek(5, 3); ?></p>
    <p>Vierkant: <?php echo berekenOppervlakteVierkant(7); ?></p>
    <p>Rechthoek: <?php echo berekenOppervlakteRechthoek(9, 7); ?></p>
    <p>Times executed: <?php echo $counter ?></p>
</div>
<div id="oef4">
    <h3>Oefening 4</h3>

    <?php
    $variabele1 = 0;
    //    $variabele2 = 0;
    $variabele3 = "";
    $variabele4 = 89;
    $variabele5 = "Mike";

    if (isset($variabele1)) { ?>
        <p>v1 is OK!</p>
    <?php }
    if (!isset($variabele2)) { ?>
        <p>v2 is OK!</p>
    <?php }
    if (empty($variabele3)) { ?>
        <p>v3 is OK!</p>
    <?php }
    if (!empty($variabele4)) { ?>
        <p>v4 is OK!</p>
    <?php }
    if (isset($variabele5) == true && empty($variabele5) == false) { ?>
        <p>v5 is OK!</p>
    <?php } ?>

</div>
<div id="oef5">
    <h3>Oefening 5</h3>
    <?php
        $test = 20;
        $nr = 0;
        switch ($test){
            case 10:
                $nr = 10;
                break;
            case 20:
                $nr = 20;
                break;
            case 30:
                $nr = 30;
                break;
        }
    ?>
    <p>Het nummer is gelijk aan <?php echo $nr;?></p>
</div>
<div id="oef6">
    <h3>Oefening 6</h3>
    <?php
        $sum = 0;
        for($i = 1; $i<=30; $i++){
            $sum += $i;
        }
    ?>
    <p>De som vann alle cijfers tussen 1 en 30 is <?php echo $sum;?></p>
</div>
<div id="oef7">
    <h3>Oefening 7</h3>
    <?php
        $currentTime = date('l j/m/Y, G:i');
        echo $currentTime;
        $month = date('n');
        $season = '';
        if($month == '12' || $month == '1' || $month == '2') {
            $season = 'Winter';
        }else if($month == '3' || $month == '4' || $month == '5'){
            $season = 'Lente';
        }else if($month == '6' || $month == '7' || $month == '8'){
            $season = 'Zomer';
        }else if($month == '9' || $month == '10' || $month == '11'){
            $season = 'Herfst';
        }
        echo $season;
    ?>

</div>
<div id="oef8">
    <h3>Oefening 8</h3>
    <?php
    function splitsNaam($naam){
        //Trim the whitespace
        $newName = trim($naam);
        //Split the name
        $list = explode(' ', $naam);
        return $list;
    }
    function voegNamenSamen($voornaam, $achternaam){

        return $voornaam . ' ' . $achternaam;
    }
    //Output 1 - Split naam
    $list = splitsNaam("Mike Derycke ");
    //Output 2 - Samenvoeging
    $samenvoeging = voegNamenSamen($list[0],$list[1]);
    ?>
    <ul>
        <li>Voornaam: <?php echo $list[0];?></li>
        <li>Achternaam: <?php echo $list[1];?></li>
        <li>Samenvoeging: <?php echo $samenvoeging;?></li>
    </ul>
</div>
<div id="oef9">
    <h3>Oefening 9</h3>
    <h4>De Europese Unie:</h4>
    <p>De Europese Unie telt sinds 2013 in totaal 28 lidstaten.</p>
    <h5>De volledige lijst van lidstaten, alfabetisch gerangschikt</h5>
    <ol>
        <?php
        //Example array - please igrno writing errors
        $arr = ['Belgium', 'The Netherlands', 'France','Germany','Italy',
            'Luxemburg','Denmark', 'Ireland', 'UK', 'Greece', 'Portugal', 'Spain',
            'Finland', 'Austria', 'Sweden', 'Cyprus', 'Estonia', 'Hungary',
            'Lithuania', 'Malta', 'Poland', 'Slovenia', 'Slovakia', 'Tsjechië',
            'Bulagaria', 'Romania', 'Croatia'];
        sort($arr);
        foreach ($arr as $name) {
            ?>
            <li>Name: <?php echo $name; ?></li>
        <?php } ?>
    </ol>


</div>
<div id="oef10">
    <h3>Oefening 10</h3>
    <table class="table">
    <?php for($i = 1; $i <= 6; $i++){ ?>
        <tr>
        <?php  for($j = 1; $j <= 5; $j++){
            //prep variables
            $result = $i * $j;
            $string = $i . '*' . $j . '=' . $result;
            ?>
            <td><?php echo $string;?></td>
        <?php } ?>
        </tr>
    <?php } ?>
    </table>
</div>

<div id="oef11">
    <h3>Oefening 11</h3>
    <?php

        $mail  = 'mike@ehb.com';
        $user = strstr($mail, '@', true);
        echo 'Resultaat A:' . $user;

        $sub_string = 'mike@';
        $str = 'mike@ehb.com';

        if (substr($str, 0, strlen($sub_string)) == $sub_string) {
          $str = substr($str, strlen($sub_string));
        }

        echo '<br>Resultaat B:' . $str;
      ?>
</div>

<div id="oef12">
    <h3>Oefening 12</h3>
    <h4>De Europese Unie:</h4>
    <p>De Europese Unie telt sinds 2013 in totaal 28 lidstaten.</p>
    <h5>De volledige lijst van lidstaten, Random gerangschikt</h5>
    <ol>
        <?php
         //De variabele $arr is nog beschikbaarbaar van oefeningen 9
        //We kunnen dus geworden hersorteren met de volgende methode

        //Gebruik dezelfde code om de array af te printen
        //Test dit door de pagina te refreshen
        shuffle($arr);
        foreach ($arr as $name) {
            ?>
            <li>Name: <?php echo $name; ?></li>
        <?php } ?>
    </ol>



</div>

<div id="oef13">
    <h3>Oefening 13</h3>
    <h4>De Europese Unie:</h4>
    <p>De Europese Unie telt sinds 2013 in totaal 28 lidstaten.</p>
    <h5>De volledige lijst van lidstaten die beginnen met de letter B</h5>
    <ol>
        <?php
        foreach ($arr as $name) {
            if(substr(strtolower($name),0,1) == "b") { ?>
            <li>Name: <?php echo $name; ?></li>
        <?php }} ?>
    </ol>


</div>

<div id="oef14">
    <h3>Oefening 14</h3>
    <?php
        foreach($arr as $key => $country){
            if(substr(strtolower($country),0,1) == "b") {
              unset($arr[$key]);
            }
          }
    ?>
    <h4>De Europese Unie:</h4>
    <p>De Europese Unie telt sinds 2013 in totaal 28 lidstaten.</p>
    <h5>De volledige lijst van lidstaten, zonder de landen met de letter B</h5>
    <ol>
        <?php
         //De variabele $arr is nog beschikbaarbaar van oefeningen 9
        //We kunnen dus geworden hersorteren met de volgende methode

        //Gebruik dezelfde code om de array af te printen
        //Test dit door de pagina te refreshen
        sort($arr);
        foreach ($arr as $name) {
            ?>
            <li>Name: <?php echo $name; ?></li>
        <?php } ?>
    </ol>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
