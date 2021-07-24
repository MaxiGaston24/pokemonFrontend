$id_producto=intval($_GET['id']);
		$fecha=date("Y-m-d H:i:s");
		$query=mysqli_query($con,"select * from products where id_producto='$id_producto'");
		$row=mysqli_fetch_array($query);
		
	} else {
		die("Producto no existe");
	}
	
?>
          <div class="row">
              <div class="col-sm-4 col-sm-offset-2 text-center">
				 <img class="item-img img-responsive" src="img/stock.png" alt=""> 
				   data-stock='<?php echo $row['stock'];?>' </div>
		<span class="item-title"> <?php echo $row['nombre_producto'];?></span>
                    </div>
                                 <span class="current-stock">Dinero Disponible</span>
                                     <div class="col-sm-12 margin-btm-10">
                      <span class="item-quantity"><?php echo number_format($row['stock'],2);?></span>
                    </div>
					<div class="col-sm-12">
                                          </div>
					<div class="col-sm-12">
                      
                    </div>
					
                 