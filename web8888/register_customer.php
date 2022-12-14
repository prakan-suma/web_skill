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
  <div class="container">
    <h1 class="text-center">สมัครผู้ซื้อ</h1>

    <form action="register_customer_save.php" method="post">
	  <div class="form-group row">
			<label for="username" class="col-sm-2 col-form-label"> ชื่อผู้ใช้งาน<span class="text-danger">*</span> </label>
		  <input name="username" type="text" required="required" class="form-control col-sm-3">
		</div>
		
		<div class="form-group row">
		  <label for="password" class="col-sm-2 col-form-label"> รหัสผ่าน<span class="text-danger">*</span> </label>
		  <input type="password" required="required" name="password" class="form-control col-sm-3">
		</div>
		
		<div class="form-group row">
		  <label for="first_name" class="col-sm-2 col-form-label"> ชื่อจริง <span class="text-danger">*</span> </label>
		  <input type="text" required="required" name="first_name" class="form-control col-sm-3">
		</div>
		
		<div class="form-group row">
		  <label for="last_name" class="col-sm-2 col-form-label"> นามสกุล <span class="text-danger">*</span> </label>
			<input type="text" required="required" name="last_name" class="form-control col-sm-3">
		</div>
		
		<div class="form-group row">
			<label for="phone" class="col-sm-2 col-form-label"> เบอร์โทร<span class="text-danger">*</span> </label>
		  <input type="text" name="phone" class="form-control col-sm-3">
		</div>
		
	  
		<div class="form-group row">
		  <label for="email" class="col-sm-2 col-form-label"> อี.เมล <span class="text-danger">*</span></label>
		  <input type="text" required="required"  name="email" class="form-control col-sm-3" id="email">
	  </div>
		
	  <button type="submit" name="btn_save" class="btn btn-primary btn-block col-sm-3 offset-sm-5">บันทึก</button>
    </form>
	  
  </div>
  <!-- body code goes here -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>