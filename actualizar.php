<?php
	$id = $_POST['cve'];
	$name = $_POST['name'];
	
	$apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];

	// Conexión a base de datos.
	$conn = @mysql_connect('localhost','root','1234') OR DIE ("Error de conexion: " . mysql_error());
	// Seleccionar base de datos.
	$db = mysql_select_db('PHPlogin',$conn) OR DIE ("Error en la base de datos: " . mysql_error());
	// Creación y/o formación de la consulta.
	$sql = "UPDATE users SET Name = '".$name."', apellido = '".$apellido."', dni = '".$dni."', Email = '".$mail."', Password = '".$pass."'
			WHERE Id = '".$id."'";
	// Ejecución y resultado de la consulta.
	$result = mysql_query($sql,$conn);
	if (!$result) {
		echo "Error en la consulta: " . mysql_error();
	} else {
		echo "Usuario actualizado correctamente (Mysql).";
	}
?>
 
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	</head>
	<body link="#08298A" vlink="#08298A" alink="#08298A">
		<a href="menu.php"><b>Regresar</b></a>
	</body>
</html>