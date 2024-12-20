<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VENTA DE COMPUTADORAS</title>
</head>
<body>
	<h1>SISTEMA DE VENTA DE COMPUTADORAS EDYCOMPUS</h1>
	<?php echo " BIENVENIDO: " . session('tipo')."<br>";?>
	<?php echo "Usuario: " .session('usuario')."<br>";?>
	<a href="<?php echo base_url('/salir');?>">Salir</a>

</body>
</html>