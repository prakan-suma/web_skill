<?php include('header.php');
//var_dump($_SESSION['user']);
?>

<main class="p-5">
	<div class="m-auto col-3 text-center">
		<h4 class=" mb-4">เพิ่มสินค้า</h4>
				<?= alertShow() ?>
		
		<form action="sell_prod_save.php" method="post" enctype="multipart/form-data">
			
		<input required type="file" class="py-5 form-control my-2" name="picture" >
			
		<input required type="text" class="form-control my-2" name="name" placeholder="ชื่อสินค้า">	

		<input required type="text" class="form-control my-2" name="price" placeholder="ราคา">
			
		<input required type="text" class="form-control my-2" name="height" placeholder="สูง">
			
		<input required type="text" class="form-control my-2" name="width" placeholder="กว้าง">
			
		<input required type="text" class="form-control my-2" name="weight" placeholder="น้ำหนัก">
			
			
		<button class="btn btn-block btn-dark" type="submit">เพิ่ิใมสินค้า</button>
		</form>
	</div>
</main>


<?php include('footer.php'); ?>