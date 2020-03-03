<?php
$numero=0;
$valor=0;
?>
<html>
<head>
	<title>
		Empleados - FapTime
	</title>
</head>
<body>
	<form method="POST" action="">
		<p>Cantidad: <input type="text" name="numero"></p>
		<p><input type="submit" name="calcular"></p>
	</form>

<?php
if (isset($_POST['calcular'])) {
	$numero=$_POST['numero'];
	while ($numero>0) {
		$numero=$numero/10;
		echo "valor: ".$numero."<br>";
	}
	
}
?>
</body>
</html>