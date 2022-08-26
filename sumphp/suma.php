<?php
if ($_POST["consulta"] == "suma") {
	$n1 = $_POST['numero_1'];
	$n2 = $_POST['numero_2'];
$suma = $n1+$n2;
echo "La SUMA DE ".$n1. " Y " .$n2. " ES = " .$suma ;
}
if ($_POST["consulta"] == "resta") {
	$n1 = $_POST['numero_1'];
	$n2 = $_POST['numero_2'];
$resta = $n1-$n2;
echo "LA RESTA DE ".$n1. " Y " .$n2. " ES = " .$resta ;
}
if ($_POST["consulta"] == "multiplicacion") {
	$n1 = $_POST['numero_1'];
	$n2 = $_POST['numero_2'];
$multiplicacion = $n1*$n2;
echo "LA MULTIPLICACION DE ".$n1. " Y " .$n2. " ES = " .$multiplicacion;
}
if ($_POST["consulta"] == "division") {
	$n1 = $_POST['numero_1'];
	$n2 = $_POST['numero_2'];
$division = $n1/$n2;
echo "LA DIVISION DE ".$n1. " Y " .$n2. " ES = " .$division;
}
if ($_POST["consulta"] == "potencia") {
	$n1 = $_POST['numero_1'];
	$n2 = $_POST['numero_2'];
	$potencia=1;
	for ($x=1; $x <=$n2; $x++){
		$potencia = $potencia * $n1;
	}
echo " La Potencia es: $potencia";
}
?>
