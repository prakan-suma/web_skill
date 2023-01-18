<?php include('header.php'); ?>
		<br>
		<br>
		<?php alertShow() ?>
		<div class="col-3 m-auto alert-info rounded text-center">
			<br>
		<h3 class="text-center">ข้อมูลลูกค้า</h3>
			<br>
		
		<form action="sell_profile_edit.php" method="post">
			
			<div class="form-group ">
			<input name="id" type="hidden" value="<?= user('id')?>">
			<!------------------------------------------------------->
			<input type="text" name="username" class="form-control mb-3"   value="<?=user('username')?>">
			<!------------------------------------------------------->	
			<input type="text" name="password" class="form-control mb-3"   value="<?=user('password')?>">
			<!------------------------------------------------------->	
			<input type="text" name="name" class="form-control mb-3"   value="<?=user('contace_name')?>">
			<!------------------------------------------------------->	
			<input type="text" name="shop_name" class="form-control mb-3"   value="<?=user('shop_name')?>">
			<!------------------------------------------------------->	
			<input type="email" name="email" class="form-control mb-3" value="<?=user('email')?>">
			<!------------------------------------------------------->	
			<input type="text" name="tel" class="form-control mb-3"   value="<?=user('tel')?>">
			<!------------------------------------------------------->	
			<input type="text" name="website" class="form-control mb-3"   value="<?=user('website')?>">
			<!------------------------------------------------------->	<textarea rows="5" name="address" class="form-control mb-3"   value="<?=user('adress')?>"></textarea>
			<!------------------------------------------------------->	
				<br>
				
			<button type="submit" class="btn btn-secondary ">แก้ไขข้อมูล</button>
			</div>
			<br>
			<br>
		</form>	
			
			
			
	</div>

	<?php include('footer.php'); ?>