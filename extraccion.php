<?php 
session_start();?>


    

    
    


<?php $Id=$_SESSION['Id']?>

<body>  
  <div class="container">
  

<?php

	// Connection info. file
	
include 'conn.php';
// Connection variables
	
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	

// Query sent to database
	
$result = mysqli_query($conn, "SELECT * FROM products WHERE id_producto = '$Id'");

// Variable $row hold the result of the query
	
$row = mysqli_fetch_assoc($result);?>



<?php $quantity=$_POST['cantidad'];?>
      <div class="modal-footer">
 	<?php $update=mysqli_query($conn,"update products set stock=stock-'$quantity' where id_producto='$Id'");?>
	


<div align='center'> 
    
        <tr> 
            <td colspan='2'><h3 align='center'>EL SALDO DE SU CUENTA FUE ACTUALIZADO</h3></td> 
        </tr> 
        
        <p><a href="menu.php">IR AL MENU</a></p>
  </div>
	
	
	
	
