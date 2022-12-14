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
	<!-- body code goes here -->
	<h1> เข้าสู่ระบบ</h1>
	<form action="login_check.php" method="post">
		<div class="form-group row">
			<label for="username" class="col-sm-2 col-form-label"> ชื่อผู้ใช้งาน </label>
			<input name="username" type="text" required="required" class="form-control col-sm-3">
		</div>

		<div class="form-group row">
			<label for="password" class="col-sm-2 col-form-label"> รหัสผ่าน </label>
			<input type="password" required="required" name="password" class="form-control col-sm-3">
		</div>
		<div class="form-group row">
			<button type="submit" name="btn_save" class="btn btn-primary btn-block col-sm-3 offset-sm-2">บันทึก</button>
		</div>
	</form>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.3.1.js"></script>

</body>

</html>