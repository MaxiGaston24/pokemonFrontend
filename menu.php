<?php 
session_start();
?>
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
            <p><a href='index.html'>Login Here</a></p></div>";
            exit;
        }
    ?>
<P>	 </P>
	<P><div align='center'> 
    
        <tr> 
            <td colspan='2'><h3 align='center'>Actualice los datos que considere</h3></td> 
        </tr> 
        <tr> 
            <td colspan='2'><h3 align='center'>MENU DE OPCIONES</h3></td> 
        </tr>  
    
  </div>	 </P>	<p><div align='center'><a href='edit-profile.php'>Editar Usuario</a></p>   <p><a href='edit-profile2.php'>crear caja</a></p> 
<p>
<a href='consultarsaldo.php'>consultar saldo</a></P></td>
<p><a href='Extraerdinero.php'>Extraer Dinero</a></p>
<p><a href='depositar.php'>Depositar Dinero</a></p>	
<p><a href='index.html'>Salir</a></p></div></div>";	
	
	
</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>