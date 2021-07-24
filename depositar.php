<?php 
session_start();?>


    

    
    


<?php $Id=$_SESSION['Id']?>

<body>  
  <div class="container">
  

<?php

	
	
include 'conn.php';
// Connection variables
	
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	


	
$result = mysqli_query($conn, "SELECT * FROM products WHERE id_producto = '$Id'");


	
$row = mysqli_fetch_assoc($result);?>	

<div align='center'> 
    
        <tr> 
            <td colspan='2'><h3 align='center'>EL SALDO DE SU CUENTA ES </h3></td> 
        </tr> 
        <tr> 
            <span class="item-quantity"><h4><?php echo number_format($row['stock'],2);?></h4></span>

        </tr> 
        
  </div>

<form method="post" action="deposito.php" method="POST">
<div align='center'>
<div class="modal-body">
        
          <div class="form-group">
            <label for="quantity" class="col-sm-2 control-label">Cantidad a Depositar</label>
            <div class="col-sm-6">
              <input type="number" min="1" name="quantity" class="form-control" id="quantity" value="" placeholder="Cantidad" required="">
            </div>
          </div>
          
          
        
      </div>
	  <button type="submit" class="btn btn-primary">Guardar datos</button>


		
      </div>
<p><a href="menu.php">IR AL MENU</a></p>
</div>
<?php 
 error_reporting(0);
 $quantity= ($_POST['quantity']);?>
      <div class="modal-footer">
 	<?php $update=mysqli_query($conn,"update products set stock=stock+'$quantity' where id_producto='$Id'");?>
	