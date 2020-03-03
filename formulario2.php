<?php
$suma=0;
$valor1=0;
$valor2=0;
	if(Isset($_POST['B1'])){
	$valor1= $_POST['T1'];
	$valor2= $_POST['T2'];
	$suma=	$valor1 + $valor2;
}

	?>
<html>
<head>
	<title>Formulario PHP</title>
</head>
<body>
	<form method="POST" action="">
		<p>Valor 1: <input type="text" name="T1" size="20"></p>
		<p>Valor 2: <input type="text" name="T2" size="20"></p>
		<p><input type="submit" value="Sumar" name="B1"></p>
		<p>Resultado: <?php echo $suma; ?> </p>
	</form>
</body>
</html>