<?php include('header.php');
var_dump($_SESSION['user']);
?>

<main class="p-5">
	<div class="m-auto col-3 text-center">

		<h4 class=" mb-4">ร่วมลงขายสินค้ากับเรา</h4>
				<?= alertShow() ?>
		
		<form action="sell_regis_save.php" method="post">
		<input required type="text" class="form-control my-2" name="username" placeholder="Username">
			
		<input required type="text" class="form-control my-2" name="name" placeholder="ชื่อในการติดต่อ">
			
		<input required type="tel" class="form-control my-2" name="tel" placeholder="เบอร์โทร">
			
		<input required type="email" class="form-control my-2" name="email" placeholder="อีเมล">
			
		<input required type="text" class="form-control my-2" name="website" placeholder="Website">
			
		<input required type="text" class="form-control my-2" name="shop_name" placeholder="ชื่อร้าน">
			
		<textarea rows="5" class="form-control my-2" name="address" placeholder="ที่อยู่"></textarea>
			
		<input required type="password" class="form-control my-2" name="password" placeholder="Password">
			
		<input required type="password" class="form-control my-2" name="repassword" placeholder="RePassword">
		
		<button class="btn btn-block btn-dark" type="submit">Register</button>
		</form>
	</div>
</main>


<?php include('footer.php'); ?>