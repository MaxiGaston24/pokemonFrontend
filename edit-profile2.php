<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Crear Caja de ahorro</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>  
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
        // checking the time now when home page starts
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
<form role="form"  action="crearcaja.php" method="POST" >
  <div class="form-group">
    <div class="form-group">
<div align="center"> 
    
        <tr> 
            <td colspan='2'><h3 align="center">CREAR CAJA DE AHORRO</h3></td> 
        </tr> 
        
    
  </div>
   <div align="center">
	

			<form action='crearcaja.php' method='post'>
							<table>
								<tr>
									<td>Tipo de caja:</td>
									<td><input type='text' id='nomprod' name='nomprod' </td>
								</tr>
<tr>
									<td>Deposito inicial:</td>
									<td><input type='number' id='stock' name='stock' </td>
								</tr>
<tr>
									
<tr>
									<td>Id usuario no tocar</td>
									<td><input type='number' id='Id' name='Id' value="<?php echo $_SESSION['Id']; ?>"/></td>
								</tr>
								
								
								
								<tr align='center'>
									<td colspan='2'><input type='submit' value='Actualizar'/></td>
								</tr>
							</table>
						</form>
 
    
</div></body>
</html>
</fieldset>
 
<div align='center'>
 
        </ul>
        <p><a href="menu.php">IR AL MENU</a></p>
    </div></div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>