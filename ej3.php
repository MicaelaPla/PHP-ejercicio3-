<html>
<body>

<?php

$llam= $_POST["llamada"];
$dia= $_POST["dia"];
$turno= $_POST["turno"];
$precio=0;

if ($llam <= 5)
{
	$llam= $_POST["llamada"];
	$precio=1;
}

if ($llam > 5 && $llam <= 8)
{
    $llam= $_POST["llamada"];
    $precio=50;
}

if ($llam > 8 && $llam <= 10)
{
    $llam= $_POST["llamada"];
    $precio=20;
}

if ($llam > 10)
{
    $llam= $_POST["llamada"];
    $precio=10;
}

if ($dia == "domingo")
{
	$preciotot= $precio + ($precio*3/100);
}

if ($turno == "mañana")
{
	$preciotot= $precio + ($precio*15/100);
}

if ($turno == "tarde")
{
	$preciotot= $precio + ($precio*10/100);
}

echo ("El precio total de la llamada es: $"), $preciotot;

?>

</body>
</html>
