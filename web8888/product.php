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
		<h1>ร้าน </h1>
		<h2 class="col-sm-3"> รายชื่อสินค้า </h2>

		<form action="product_delete.php" method="post">
			<div class="mb-4">
				<button class="col-sm-1 btn btn-danger"> ลบ </button>
				<a href="product_add.php" class=" col-sm-1 offset-sm-9 btn btn-success"> เพิ่ม </a>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th> <input type="checkbox" onClick="checkAll(this)"> </th>
							<th> ลำดับ </th>
							<th> ชื่อสินค้า </th>
							<th> ราคา </th>
							<th> รูปภาพ </th>
							<th> รายละเอียด </th>
							<th> ขนาด(ซม.) </th>
							<th> น้ำหนัก(กก.) </th>
							<th> แก้ไข </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <input class="check" type="checkbox" name="" value=""> </td>
							<td> </td>
							<td> </td>
							<td> </td>
							<td class="text-center img-fluid"> <img src="upload_picture/" height="80"> </td>
							<td> </td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.3.1.js"></script>
</body>

</html>