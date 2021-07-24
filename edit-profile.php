<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Editar Perfile Usuario</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
  <body>      
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {  
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        <h4>You need to login to access this page.</h4>
        <p><a href='login.html'>Login Here!</a></p></div>";
        exit;
    }
        
        $now = time();            
        if ($now > $_SESSION['expire'] )
        {
            session_destroy();
            echo "<div class='alert alert-danger' role='alert'>
            <h4>Your session has expire!</h4>
            <p><a href='login.html'>Login Here</a></p></div>";
            exit;
        }
    ?>

    <div class="container">
        
        
   <fieldset>
<form role="form"  action="actualizar.php" method="POST" >
  <div class="form-group">
    <div class="form-group">
<div align='center'> 
    
        <tr> 
            <td colspan='2'><h3 align='center'>Actualice los datos que considere</h3></td> 
        </tr> 
        <tr> 
            <td colspan='2'>En los campos del formulario puede ver los valores actuales,  
            si no se cambian los valores se mantienen iguales.</td> 
        </tr> 
    
  </div>
   <div align='center'>
	

			<form action='actualizar.php' method='post'>
							<table>
								<tr>
									<td>ID:</td>
									<td><input type='text' id='cve' name='cve' value="<?php echo $_SESSION['Id']; ?>"/> </td>
								</tr>
								<tr>
									<td>Nombre:</td>
									<td><input type='text' id='name' name='name' value="<?php echo $_SESSION['name']; ?>"/></td>
								</tr>
<tr>
									<td>Apellido:</td>
									<td><input type='text' id='apellido' name='apellido' value="<?php echo $_SESSION['apellido']; ?>"/></td>
								</tr>
<tr>
									<td>Dni:</td>
									<td><input type='text' id='dni' name='dni' value="<?php echo $_SESSION['dni']; ?>"/></td>
								</tr>
<tr>
									<td>E-mail:</td>
									<td><input type='text' id='mail' name='mail' value="<?php echo $_SESSION['Email']; ?>"/></td>
								</tr>
								<tr>
									<td>Password:</td>
									<td><input type='text' id='pass' name='pass' value="<?php echo $_SESSION['Password']; ?>"/></td>
								</tr>
								
								
								<tr align='center'>
									<td colspan='2'><input type='submit' value='Actualizar'/></td>
								</tr>
							</table>
						</form>
 
    
</div></body>
</html>
</fieldset>
 

 	
  
 


    


 
        </ul>
        <p><a href="menu.php">IR AL MENU</a></p>
    </div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>