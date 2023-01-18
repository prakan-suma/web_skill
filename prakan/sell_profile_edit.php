<?php
include('db.php');


$sql = "UPDATE `seller` SET 
`username` = '{$_POST['username']}', 
`shop_name` = '{$_POST['shop_name']}', 
`password` = '{$_POST['password']}', 
`adress` = '{$_POST['address']}', 
`tel` = '{$_POST['tel']}', 
`contace_name` = '{$_POST['name']}', 
`email` = '{$_POST['email']}'
`website` = '{$_POST['website']}'
WHERE `customer`.`id` = '{$_POST['id']}'";
$edit = set($sql);


if($edit){
	$_SESSION['auth'] = true;
	$_SESSION['user'] = $_POST;
	alertSess('success','บันทึกข้อมูลสำเสร็จ','cus_profile.php');
}else{
	alertSess('danger','บันทึกข้อมูลไม่สำเสร็จ','cus_profile.php');
}

?>