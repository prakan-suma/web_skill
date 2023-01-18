<?php
include('db.php');

$sql = "select * from seller where username = '{$_POST['username']}' and password = '{$_POST['password']}'";
$seller = get($sql)[0];

$sql = "select * from customer where username = '{$_POST['username']}' and password = '{$_POST['password']}'";
$customer = get($sql)[0];


if($seller){
	$_SESSION['user'] = $seller[0];
	$_SESSION['user']['type'] = 'seller';
	$_SESSION['auth'] = true;
	rount('index.php');
}else if($customer){
	$_SESSION['user'] = $customer[0];
	$_SESSION['user']['type'] = 'customer';
	$_SESSION['auth'] = true;
	rount('index.php');
}else{
	alterSess('alert-danger','username or password is false','login.php');
}



?>