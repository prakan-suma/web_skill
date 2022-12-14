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

		<form action="product_update.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="">
			<div class="form-group row">
				<label for="name" class="col-sm-2"> ชื่อสินค้า </label>
				<input type="text" name="name" class="form-control col-sm-4" value="">
			</div>
			<div class="form-group row">
				<label for="price" class="col-sm-2"> ราคา </label>
				<input type="text" name="price" class="form-control col-sm-4" value="">
			</div>
			<div class="form-group row">
				<label for="picture" class="col-sm-2"> รูปภาพตัวอย่าง </label>
				<input type="file" name="picture" class="form-control-file col-sm-4">
			</div>
			<div class="form-group row">
				<label for="detail" class="col-sm-2"> รายละเอียดสินค้า </label>
				<textarea name="detail" class="form-control col-sm-6"></textarea>
			</div>
			<div class="form-group row">
				<label for="size" class="col-sm-2"> ขนาด (เซนติเมตร) </label>

				<input type="text" name="box_width" class="form-control col-sm-2 m-1" placeholder="กว้าง">
				<input type="text" name="box_height" class="form-control col-sm-2 m-1" placeholder="สูง" >
				<input type="text" name="box_long" class="form-control col-sm-2 m-1" placeholder="ยาว">
			</div>
			<div class="form-group row">
				<label for="weight" class="col-sm-2"> น้ำหนัก (กิโลกรัม) </label>
				<input type="text" name="box_weight" class="form-control col-sm-4" ">
			</div>
			<div class="form-group row">
				<button type="submit" class="btn btn-primary offset-sm-2"> บันทึก </button>
			</div>

		</form>

	</div>
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.3.1.js"></script>
</body>

</html>