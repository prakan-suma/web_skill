<?php
include('db.php');


$sql = "UPDATE `customer` SET 
`first_name` = '{$_POST['first_name']}', 
`last_name` = '{$_POST['last_name']}', 
`username` = '{$_POST['username']}', 
`password` = '{$_POST['password']}', 
`email` = '{$_POST['email']}', 
`tel` = '{$_POST['tel']}'
WHERE `customer`.`id` = '{$_POST['id']}';";
$edit = set($sql);



if($edit){
	$_SESSION['auth'] = true;
	$_SESSION['user'] = $_POST;
	alertSess('success','บันทึกข้อมูลสำเสร็จ','cus_profile.php');
}else{
	alertSess('danger','บันทึกข้อมูลไม่สำเสร็จ','cus_profile.php');
}



?>