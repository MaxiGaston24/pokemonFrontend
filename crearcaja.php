<?php
	
	$nomprod = $_POST['nomprod'];
	
	$stock = $_POST['stock'];
        
	$Id = $_POST['Id'];
$Id2 = $_POST['Id'];
	$date_added=date("Y-m-d H:i:s");

	// Conexión a base de datos.
	$conn = @mysql_connect('localhost','root','1234') OR DIE ("Error de conexion: " . mysql_error());
	// Seleccionar base de datos.
	$db = mysql_select_db('PHPlogin',$conn) OR DIE ("Error en la base de datos: " . mysql_error());
	// Creación y/o formación de la consulta.
	$sql =  "INSERT INTO products (id_producto, nombre_producto, date_added, stock, Id) VALUES ('$Id','$nomprod','$date_added','$stock','$Id2')";
	// Ejecución y resultado de la consulta.
	$result = mysql_query($sql,$conn);
	if (!$result) {
		echo "Error en la consulta: " . mysql_error();
	} else {
		echo "Usuario actualizado correctamente .";
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