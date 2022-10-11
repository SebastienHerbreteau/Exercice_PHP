<!-- ---------------------------------------------------------Exo 1----------------------------------------------------------------- -->
<?php

$x = 5;
$y = 10;
$sum = $x + $y;
echo "l’addition de " . $x . " et de " . $y . " est égale à " . $sum . ".";

?>

<br>
<br>
<!-- ---------------------------------------------------------Exo 2----------------------------------------------------------------- -->
<?php

$string = "string";
$integer = 56;
$boolean = true;
$float = 12.3;
$array = ["banane", "fraise", "abricot"];
$null = NULL;

?>
<!-- ---------------------------------------------------------Exo 3----------------------------------------------------------------- -->
<?php

$isActive = false;
$genre = "Troll";

if ($isActive) {
    echo "Le compte du personnage troll est actif";
} else {
    echo "Le compte du personnage troll est inactif";
}

?>

<br>
<br>
<!-- ---------------------------------------------------------Exo 4----------------------------------------------------------------- -->
<?php

$number = 7;

if ($number % 2 == 0) {
    echo $number . " est un chiffre pair";
} else {
    echo $number . " est un chiffre impair";
}

$pair = ($number % 2 == 0) ? true : false;

$impair = ($number % 3 == 0) ? true : false;

?>

<!-- ---------------------------------------------------------Exo 5----------------------------------------------------------------- -->
<br>
<br>
<?php

$number = 600;

if ($number % 5 == 0 && $number % 3 == 0) {
    echo $number . " est divisible par 5, et par 3.";
} else if ($number % 3 == 0) {
    echo $number . " est divisible par 3";
} else if ($number % 5 == 0) {
    echo $number . " est divisible par 5";
} else {
    echo $number . " n'est divisible ni par 5, ni par 3";
}
?>

<!-- ---------------------------------------------------------Exo 6----------------------------------------------------------------- -->
<br>
<br>
<?php

echo (abs(-10));

?>

<!-- ---------------------------------------------------------Exo 7----------------------------------------------------------------- -->
<br>
<br>
<?php

$semaine = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

for ($i = 0; $i < count($semaine); $i++) {

    echo $i + 1 . "-" . $semaine[$i] . "<br>";
};

?>
<!-- ---------------------------------------------------------Exo 8----------------------------------------------------------------- -->
<br>
<br>

<?php

function between($x, $y)
{
    for ($x; $x < $y - 1; $x++) {
        echo $x + 1 . "<br>";
    }
}

between(8, 23)

?>

<!-- ---------------------------------------------------------Exo 9----------------------------------------------------------------- -->
<br>
<br>

<?php

function calc($a, $b, $c, $d)
{
    $resA_B = $a + $b;
    $resC_D = $c * $d;

    switch ($resA_B) {
        case $resA_B > $resC_D:
            echo "Supérieur";
            break;
        case $resA_B < $resC_D:
            echo "Inférieur";
            break;
        case $resA_B = $resC_D:
            echo "Egal";
            break;
    }
}

calc(6, 6, 3, 4)

?>

<!-- ---------------------------------------------------------Exo 10----------------------------------------------------------------- -->
<br>
<br>
<?php



function arrayP_I($array)
{
    $arrayImpair = [];
    $arrayPair = [];

    for ($x = 0; $x < count($array); $x++) {
        if ($array[$x] % 2 == 0) {
            array_push($arrayPair, $array[$x]);
        } else {
            array_push($arrayImpair, $array[$x]);
        }
    }
    $afficheTabImpair = implode(", ", $arrayImpair);
    echo $afficheTabImpair . "<br>";

    $afficheTabPair = implode(", ", $arrayPair);
    echo $afficheTabPair;
}

$array = [1, 2, 3, 4, 5, 6, 7];
arrayP_I($array);

?>

<!-- ---------------------------------------------------------Exo 11----------------------------------------------------------------- -->
<br>
<br>
<?php



function arrayI($array)
{
    $arrayImpair = [];


    for ($x = 0; $x < count($array); $x++) {
        if ($array[$x] % 3 == 0) {
            array_push($arrayImpair, $array[$x]);
        }
    }
    $afficheTabImpair = implode(", ", $arrayImpair);
    echo $afficheTabImpair . "<br>";
}

$array = [1, 2, 3, 4, 5, 6, 7];
arrayI($array);

?>


<!-- ---------------------------------------------------------Exo 12----------------------------------------------------------------- -->
<br>
<br>

<?php



function sum($array)
{
    echo array_sum($array);
}

$array = [11, 11];
sum($array)
?>

<!-- ---------------------------------------------------------Exo 13----------------------------------------------------------------- -->
<br>
<br>
<?php



function avg($array)
{
    echo array_sum($array) / count($array);
}

$array = [10, 30];
avg($array)
?>