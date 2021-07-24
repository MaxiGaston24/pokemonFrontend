<!doctype html>
<html lang="en">
  <head>
    <title>Crear Cuenta en Base de datos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>

<div class="container">

	<?php

	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Chequea coneccion
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// chequea email en base de datos
	$checkEmail = "SELECT * FROM pokedexes WHERE user = '$_POST[user]' ";

	// Variable $result 
	$result = $conn-> query($checkEmail);

	// Variable $count 
	$count = mysqli_num_rows($result);

	// If count == 1 existe 
	if ($count == 1) {
	echo "<br />". "El usuario ya se encuentra en la base de datos" . "<br />";

	echo "<a href='index.html'>Por favor reingrese la contraseña</a>.";
	} else {	
	
	
	$user = $_POST['user'];
	
	$pass = $_POST['password'];
	
	// El password_hash() funcion que convierte la contraseña encriptado
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Query inserta Name, Email and Password hash en la base de datos

	$query = "INSERT INTO users (user,password) VALUES ('$user', '$passHash')";
	
	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success' role='alert'><h3>Su cuenta a sido registrada.</h3>
		<a class='btn btn-outline-primary' href='index.html' role='button'>Login</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	?>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>