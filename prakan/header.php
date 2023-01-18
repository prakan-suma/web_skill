<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	  <style>
		  nav a{
			  color: #232323;
			  margin: 0 1rem;
		  }nav a:hover{
			  color: #5C5C5C;
			  text-decoration: none;
		  }
	  </style>
	
  </head>
  <body>
	  <nav class="p-3 d-flex alert-item-content justify-content-between alert-secondary">
	  	<a href="index.php">E COMMERCE</a>
		  <div>
			<?php
			  if(isset($_SESSION['auth'])){
				  
			  if(user('type') == 'seller'){
			?>
			  	 <a href="sell_profile.php" class="">ข้อมูลร้านค้า</a>
                   <a href="sell_purchase.php" class="">รายการใบสั่งซื้อ</a>
                   <a href="sell_product.php" class="">สินค้า</a>
			  <?php
			  }else{
				  ?>
			   <a href="cus_profile.php" class="">ข้อมูลลูกค้า</a>
                    <a href="cart_detail.php" class="">รายการใบสั่งซื้อ</a>
                    <a href="cart.php" class="">ตะกร้าสินค้า</a>
			  <?php
			  }
				  }
			  ?> 
				 
					 
			</div>			
			
				  
					
			  			
			 
		  <div>
		  	<?php 
			  if(isset($_SESSION['auth'])){
				  ?>
			  <span><?= user('username'); ?></span>
			  <a href="logout.php">ออกจากระบบ</a>
			  <?php
			  }else{
				  ?>
			  		<a href="cus_register.php">ลงทะเบียนซื้อสินค้า</a>
			  		<a href="sell_regis.php">ลงทะเบียนขาย</a>
			  		<a href="login.php">เข้าสู่ระบบ</a>	
			  <?php
			  }
			  ?>
		  </div>
	  </nav>
  	