<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>

<h1>Hola</h1>


<?php
$mensaje = "Hola Mundo";
echo $mensaje;
?>
<br>
<hr>
<?php
$numero5 = "5";
$numero2 = "2";

$totalsuma = $numero5 + $numero2;
$totalresta = $numero5 - $numero2;
$totaldiv = $numero5 / $numero2;
$totalmult = $numero5 * $numero2;
$totalresto = $numero5 % $numero2;

echo $totalsuma;
echo $totalresta;
echo $totaldiv;
echo $totalmult;
echo $totalresto;
?>
<br>
<hr>
<?php
$celsius = "20";
$fahr = "32";
$multiplicar = "9.5";
$calculo = $celsius * $multiplicar + $fahr;
echo $calculo
?>
<br>
<hr>
<?php
$baserect = "18";
$alturarect = "12";
$perimetrorect = $baserect + $baserect + $alturarect + $alturarect;
echo $perimetrorect;
$arearect = $baserect * $alturarect;
echo $arearect;
?>
<br>
<hr>
<?php
$radiocirc = "30";
$numeropi = "3.14";
$radioalcuadrado = $radiocirc * $radiocirc;
$areacirc = $numeropi * $radioalcuadrado;
echo $areacirc;
$perimetrocirc = $numero2 * $numeropi * $radiocirc;
echo $perimetrocirc;
?>
