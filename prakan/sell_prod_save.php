<?php
include('db.php');

if(!empty($_FILES['picture']['name'])){
	$ext = pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION);
	$picture = md5(strtotime('now').$_SERVER['REMOTE_ADDR']).'.'.$ext; 
}else{
	alertSess('warning','จำเป็นต้องแนบรูปสินค้า','sell_prod_add.php');
}

$sid = user('id');

$sql = "insert into product value(null,
'{$_POST['name']}',
'{$picture}',
'{$_POST['price']}',
'{$_POST['height']}',
'{$_POST['weight']}',
'{$_POST['width']}',
'{$sid}'
)";

$set = set($sql);
if($set){
	copy($_FILES['picture']['tmp_name'],'prod_img/'.$picture);
	rount('sell_product.php');
}else{
	alertSess('danger','เกิดข้อผิดพลาด','sell_prod_add.php');
}
?>