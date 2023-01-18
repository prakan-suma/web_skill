<?php
include('db.php');

if($_POST['password'] != $_POST['repassword']){
	alertSess('danger','Password Not Match!','sell_regis.php');
	exit;
}

$sql = "INSERT INTO seller value(null,
'{$_POST['username']}',
'{$_POST['shop_name']}',
'{$_POST['password']}',
'{$_POST['address']}',
'{$_POST['tel']}',
'{$_POST['name']}',
'{$_POST['email']}',
'{$_POST['website']}'
)";

$set = set($sql);

if($set){
	$sql = "SELECT * from seller where username = '{$_POST['username']}'";
	$_SESSION['user'] = get($sql)[0];
	$_SESSION['auth'] = 'ture';
	$_SESSION['user']['type'] = 'seller';
	rount('index.php');
}else{
	alertSess('danger','เกิดข้อผิดพลาด Username อาจซ้ำกับผู้ใช้อื่น','sell_regis.php');
}
?>