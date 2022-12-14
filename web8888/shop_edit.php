<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	
  </head>
  <body>
<!-- navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Logo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent1">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"> <a class="nav-link" href="index.php">หน้าหลัก <span class="sr-only">(current)</span></a> </li>
				<li class="nav-item"> <a href="customer.php" class="nav-link">ข้อมูลลูกค้า</a> </li>
				<li class="nav-item"> <a href="customer_purchase.php" class="nav-link">รายการใบสั่งซื้อ</a> </li>
				<li class="nav-item"> <a href="cart.php" class="nav-link">ตะกร้าสินค้า</a> </li>
				<li class="nav-item"> <a href="shop.php" class="nav-link">ข้อมูลร้านค้า</a> </li>
				<li class="nav-item"> <a href="seller_purchase.php" class="nav-link">รายการใบสั่งซื้อ</a> </li>
				<li class="nav-item"> <a href="product.php" class="nav-link">สินค้า</a> </li>
			</ul>
			<ul class="navbar-nav ">
				<li class="nav-item"> <span class="nav-link"></span> </li>
				<li class="nav-item"><a href="logout.php" class="nav-link btn-warning text-white">ออกจากระบบ</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สมัครสมาชิก </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
						<a class="dropdown-item" href="register_seller.php">ผู้ขาย</a>
						<a class="dropdown-item" href="register_customer.php">ผู้ซื้อ</a>
					</div>
				</li>
				<li class="nav-item"> <a href="login.php" class="nav-link btn-success text-white">เข้าสู่ระบบ</a></li>
			</ul>
		</div>
	</nav>
<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<div class="container">
	  <h1>แก้ไขข้อมูลร้านค้า</h1>
		
		<?php
	 if(isset($_SESSION['alert-message'])){ 
	 ?>
	  <div class="alert <?=$_SESSION['alert-class']?>"> <?=$_SESSION['alert-message']?> </div>
	  
	 <?php
		 unset($_SESSION['alert-message']);
		 unset($_SESSION['alert-class']);
		 
	  }
	  ?>
    <form action="register_seller_update.php" method="post">
		<input type="hidden" name="id" value="<?=$_SESSION['user']['id']?>">
		
	  <div class="form-group row">
			<label for="username" class="col-sm-2 col-form-label"> ชื่อผู้ใช้งาน<span class="text-danger">*</span> </label>
		  <input name="username" type="text" required="required" class="form-control col-sm-3" value="<?=$_SESSION['user']['username']?>">
		</div>
		
		<div class="form-group row">
		  <label for="password" class="col-sm-2 col-form-label"> รหัสผ่าน<span class="text-danger">*</span> </label>
		  <input type="password" required="required" name="password" class="form-control col-sm-3" value="<?=$_SESSION['user']['password']?>">
		</div>
		
		<div class="form-group row">
		  <label for="shop_name" class="col-sm-2 col-form-label"> ชื่อร้าน<span class="text-danger">*</span> </label>
		  <input type="text" required="required" name="shop_name" class="form-control col-sm-3" value="<?=$_SESSION['user']['shop_name']?>">
		</div>
		
		<div class="form-group row">
		  <label for="address" class="col-sm-2 col-form-label"> ที่อยู่<span class="text-danger">*</span> </label>
			<textarea required="required" class="form-control col-sm-10" name="address"><?=$_SESSION['user']['address']?></textarea>
		</div>
		
		<div class="form-group row">
			<label for="phone" class="col-sm-2 col-form-label"> เบอร์โทรติดต่อ<span class="text-danger">*</span> </label>
		  <input type="text" name="phone" class="form-control col-sm-3" value="<?=$_SESSION['user']['phone']?>">
		</div>
		
	  <div class="form-group row">
			<label for="contace_name" class="col-sm-2 col-form-label"> ชื่อผู้ติดต่อ <span class="text-danger">*</span> </label>
			<input type="text" required="required"  name="contace_name" class="form-control col-sm-3" value="<?=$_SESSION['user']['contace_name']?>">
		</div>
		<div class="form-group row">
		  <label for="email" class="col-sm-2 col-form-label"> อี.เมล <span class="text-danger">*</span></label>
		  <input type="text" required="required"  name="email" class="form-control col-sm-3" id="email" value="<?=$_SESSION['user']['email']?>">
	  </div>
		
		<div class="form-group row">
		  <label for="website" class="col-sm-2 col-form-label"> เว็บไซต์ </label>
		  <input type="text" name="website" class="form-control col-sm-3" value="<?=$_SESSION['user']['website']?>">
	  </div>
	  <button type="submit" name="btn_save" class="btn btn-primary btn-block col-sm-3 offset-sm-5">บันทึก</button>
    </form>
		
	</div>
<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>