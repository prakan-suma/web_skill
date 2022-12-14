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

	<div class="container">
		<h1>หน้าตะกร้าสินค้า </h1>
		<form action="cart_update.php" method="post">
			<div class="row table-responsive">
				<table class="table table-bordered table-hover">
					<tr>
						<th> รหัสสินค้า </th>
						<th> ชื่อสินค้า </th>
						<th> ราคา </th>
						<th> จำนวน </th>
						<th> ราคารวม </th>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>

				</table>
			</div>
			<div class="row">
				<button type="submit" class="btn btn-primary offset-md-6 mr-2"> คำนวณราคาใหม่</button>
				<a href="cart_confirm.php" class="btn btn-success "> ยืนยันสั่งซื้อ </a>
			</div>
		</form>
		<div class="row">
			<div class="col-md-1 offset-md-9">
				ราคารวม
			</div>
			<div class="col-md-2 text-right"></div>
		</div>
		<div class="row">
			<div class="col-md-1 offset-md-9">
				ภาษี 7%
			</div>
			<div class="col-md-2 text-right"></div>
		</div>
		<div class="row">
			<div class="col-md-1 offset-md-9">
				ค่าขนส่ง
			</div>
			<div class="col-md-2 text-right"></div>
		</div>
		<div class="row">
			<div class="col-md-1 offset-md-9">
				ราคาสุทธิ
			</div>
			<div class="col-md-2 text-right"></div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.3.1.js"></script>
</body>

</html>