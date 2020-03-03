<?php
$cantidad=0;
$precio=0;
$total=0;
$final=0;
?>
<html>
<head>
	<title>
		Empleados - FapTime
	</title>
</head>
<body>
	<form method="POST" action="">
		<p>Cantidad: <input type="text" name="cantidad"></p>
		<p>Precio: 	<input type="text" name="precio"></p>
		<p><input type="submit" name="calcular"></p>
	</form>

<?php
if (isset($_POST['calcular'])) {
	$cantidad=$_POST['cantidad'];
	$precio=$_POST['precio'];
	$resultado=$cantidad*$precio;

	echo "Cantidad: $cantidad<br>Precio: $precio<br>Total en ventas: $resultado<br> <br>";

	if ($resultado<150) {
		echo "No recibe comisión.";
	}elseif (150<$resultado && $resultado<=400) {
		echo "Comisión del 10% de ventas<br><br>";
		$total=$resultado*0.10;
		echo "Comisión: S/. $total";
	}elseif ($resultado>400) {
		echo "Comisión de S/. 50 más 9% de ventas<br>";
		$total=$resultado*0.09;
		$final=$total+50;
		echo "Comisión de S/. $final";
	}
}
?>
</body>
</html>