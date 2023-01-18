<?php include('header.php');
sellerAuth();

?>

<main class="p-5">
	<div class="m-auto">
	<?= alertShow() ?>
		<h4 class=" mb-4">ร้าน <?= user('shop_name') ?></h4>
		<table class="table table-bordered"> 
			<thead>
				<th>รหัสสินค้า</th>
				<th>รูปภาพ</th>
				<th>ชื่อ</th>
				<th>ราคา</th>
				<th>สูง</th>
				<th>กว้าง</th>
				<th>น้ำหนัก</th>
				<th>&nbsp;</th>
			</thead>
			
			<tbody>
				<?php
				$sql = "SELECT * from product where seller_id = ".user('id');
		
		
				$product = get($sql);
				
				foreach($product as $p){
				
				?>
				<tr>
					<td> <?= $p['id']?> </td>
					<td><img src="prod_img/<?= $p['picture']?>" alt="product img"> </td>
					<td> <?= $p['name']?> </td>
					<td> <?= $p['price']?> </td>
					<td> <?= $p['height']?> </td>
					<td> <?= $p['weight']?> </td>
					<td> <?= $p['width']?> </td>
					<td><a href="sell_prod_delete.php" class="btn btn-block btn-outline-danger">ลบ</a>
					<a href="sell_prod_edit.php" class="btn btn-block btn-outline-primary">แก้ไข</a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
			
		</table>
		<div>
			<a href="sell_prod_add.php" class="btn btn-success">เพื่มสินค้า</a>
		</div>
		
	
	</div>
</main>


<?php include('footer.php'); ?>