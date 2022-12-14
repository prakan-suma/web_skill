<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled Document</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<!-- navbar --- -->
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
	<section class="container">
		<form action="search.php" method="post" class="mt-4 mb-4">
			<div class="input-group">
				<input type="text" name="keyword" class="form-control">
				<div class="input-group-append">
					<button type="submit" class="btn btn-secondary"> ค้นหา </button>
				</div>
			</div>
		</form>

		<!-- best product  -->
		<h2>สินค้าขายดี</h2>
		<div class="row best_product">
			<div class="col-md-2 m-1">
				<div class="card">
					<div class="card-body">
						<div class="text-center">
							<img src="" class="img-fluid">
						</div>
						<div class="text-primary"> ชื่อ </div>
						<div class="text-danger">ราคา : xxxx บาท </div>
					</div>
					<div class="card-footer">
						<a href="cart_add.php" class="btn btn-block btn-success"> สั่งซื้อ</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- product_list  -->
	<section class="container">
		<h2>รายการสินค้า</h2>
		<div class="row product_list">
			<div class="col-md-2 m-1">
				<div class="card">
					<div class="card-body">
						<div class="text-center">
							<img src="upload_picture/" height="70" class="img-fluid">
						</div>
						<div class="text-primary"> name </div>
						<div class="text-danger">ราคา : xxxx บาท </div>
					</div>
					<div class="card-footer">
						<a href="cart_add.php" class="btn btn-block btn-success"> สั่งซื้อ</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<nav aria-label="Page navigation example" class="container">
		<!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
		<ul class="pagination ">
			<li class="page-item">
				<a class="page-link" href="index.php?page=1" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
			<li class="page-item"> <a class="page-link" href="index.php"></a> </li>
			<li class="page-item">
				<a class="page-link" href="index.php" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		</ul>
	</nav>

	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.3.1.js"></script>
</body>

</html>