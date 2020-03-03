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
	
	if ($numero=="") {
		echo "Número vacío.";
	}else{
		$valor=$numero%2;
		if ($valor==0) {
		echo "Número par.";
	}elseif ($valor==1) {
		echo "Número impar.";
	}
	}
}
?>
</body>
</html>