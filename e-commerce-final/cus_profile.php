<?php 
include_once('db.php');
?>

<?php include('header.php'); ?>
		<br>
		<br>
		<?php alertShow() ?>
		<div class="col-3 m-auto alert-info rounded text-center">
			<br>
		<h3 class="text-center">ข้อมูลลูกค้า</h3>
			<br>

		
		<form action="cus_profile_edit.php" method="post">
			
			<div class="form-group ">
			<input name="id" type="hidden" value="<?=user('id')?>">
			<!------------------------------------------------------->
			<input type="text" name="username" class="form-control mb-3"   value="<?=user('username')?>">
			<!------------------------------------------------------->	
			<input type="text" name="password" class="form-control mb-3"   value="<?=user('password')?>">
			<!------------------------------------------------------->	
			<input type="text" name="first_name" class="form-control mb-3"   value="<?=user('first_name')?>">
			<!------------------------------------------------------->	
			<input type="text" name="last_name" class="form-control mb-3"   value="<?=user('last_name')?>">
			<!------------------------------------------------------->	
			<input type="email" name="email" class="form-control mb-3" value="<?=user('email')?>">
			<!------------------------------------------------------->	
			<input type="text" name="tel" class="form-control mb-3"   value="<?=user('tel')?>">
			<!------------------------------------------------------->	
				<br>
			<button type="submit" class="btn btn-secondary ">แก้ไขข้อมูล</button>
			</div>
			<br>
			<br>
		</form>	
			
			
			
	</div>

	<?php include('footer.php'); ?>

 <?php
unset($_SESSION['alert_class']);
unset($_SESSION['alert_message']);

?>