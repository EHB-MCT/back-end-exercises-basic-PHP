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
<h1>Session 1</h1>
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

<div id="ex1">
    <h3>Exercise 1</h3>
    <p>Surface area of a circle with radius 2.2 is <?php echo calculateSurfaceAreaCircle(2.2); ?></p>
</div>

<div id="ex2">
    <h3>Oefening 2</h3>

    <p>Driehoek: <?php echo calculateSurfaceAreaTriangle(5, 3); ?></p>
    <p>Vierkant: <?php echo calculateSurfaceAreaSquare(7); ?></p>
    <p>Rechthoek: <?php echo calculateSurfaceAreaRectangle(9, 7); ?></p>
</div>

<div id="ex4">
    <h3>Oefening 4</h3>

    <?php
    $variable = 0;
    // $variable2 = 0;
    $variable3 = "";
    $variable4 = 89;

    if (isset($variable)) { ?>
        <p>v1 is OK!</p>
    <?php }
    if (!isset($variable2)) { ?>
        <p>v2 is OK!</p>
    <?php }
    if (empty($variable3)) { ?>
        <p>v3 is OK!</p>
    <?php }
    if (!empty($variable4)) { ?>
        <p>v4 is OK!</p>
    <?php } ?>
</div>

<div id="ex5">
    <h3>Oefening 5</h3>
    <?php
        $test = 20;
        $number = 0;
        switch ($test){
            case 10:
                $number = 10;
                break;
            case 20:
                $number = 20;
                break;
            case 30:
                $number = 30;
                break;
        }
    ?>
    <p>Het nummer is gelijk aan <?= $number ?></p>
</div>

<div id="ex6">
    <h3>Oefening 6</h3>
    <?php
        $sum = 0;
        for($i = 1; $i <= 30; $i++){
            $sum += $i;
        }
    ?>
    <p>De som van alle cijfers tussen 1 en 30 is <?php echo $sum;?></p>
</div>

<div id="ex7">
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

<div id="ex8">
    <h3>Oefening 8</h3>
    <?php
    function splitName($name){
        // Trim the whitespace
        $newName = trim($name);
        // Split the name
        return explode(' ', $name);
    }

    function mergeNames($firstName, $lastName){
        return $firstName . ' ' . $lastName;
    }

    // Output 1 - Split
    $list = splitName("John Doe ");
    // Output 2 - Merge
    $merged = mergeNames($list[0], $list[1]);
    ?>
    <ul>
        <li>Voornaam: <?php echo $list[0];?></li>
        <li>Achternaam: <?php echo $list[1];?></li>
        <li>Samenvoeging: <?php echo $merged;?></li>
    </ul>
</div>

<div id="ex9">
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
<div id="ex10">
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

<div id="ex11">
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

<div id="ex12">
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

<div id="ex13">
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

<div id="ex14">
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
