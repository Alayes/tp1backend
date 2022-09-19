<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>

<h2>Hola mundo</h2>

<h3>Ejercicio 1</h3>
<?php
$mensaje = "Hola Mundo";
echo $mensaje;
?>

<br>
<hr>

<h3>Ejercicio 2</h3>
<?php
$numero4 = "4";
$numero2 = "2";

$totalsuma = $numero4 + $numero2;
echo "$totalsuma da la suma";
$totalresta = $numero4 - $numero2;
echo "$totalresta da la resta";
$totaldiv = $numero4 / $numero2;
echo "$totaldiv da la division";
$totalmult = $numero4 * $numero2;
echo "$totalmult da la multiplicacion";
$totalresto = $numero4 % $numero2;
echo "$totalresto da la division con resto";


?>

<br>
<hr>
<h3>Ejercicio 4</h3>
<?php
$celsius = "20";
$fahr = "32";
$multiplicar = "9,5";
$calculo = $celsius * $multiplicar + $fahr;
echo "$calculo grados Fahrenheit"
?>
<br>
<hr>
<h3>Ejercicio 5a</h3>
<?php
$baserect = "18";
$alturarect = "12";
$perimetrorect = $baserect + $baserect + $alturarect + $alturarect;
echo "$perimetrorect es el perimetro del rectangulo";
$arearect = $baserect * $alturarect;
echo "$arearect es el area del rectangulo";
?>
<br>
<hr>
<h3>Ejercicio 5b</h3>
<?php
$radiocirc = "30";
$numeropi = "3,14";
$radioalcuadrado = $radiocirc * $radiocirc;
$areacirc = $numeropi * $radioalcuadrado;
echo "$areacirc es el area del circulo";
$perimetrocirc = $numero2 * $numeropi * $radiocirc;
echo "$perimetrocirc es el perimetro del circulo";
?>
