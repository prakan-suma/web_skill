<?PHP
session_start();
$conn = new mysqli('localhost','root','','e-commerce');
$conn->set_charset('utf-8');
date_default_timezone_set('Asia/Bangkok');

function set($sql){
	global $conn;
	try{
		$rel = $conn->query($sql);
		return $rel;
	}catch(Exception $e){
		echo $e->getMessage();
		return $rel;
	}
}

function get($sql){
	global $conn;
	try{
		$rel = $conn->query($sql);
		$row = $rel->fetch_all(MYSQLI_ASSOC);
		return $row;
	}catch(Exception $e){
		$row = [];
		return $row;
	}
}

function rount($link){
	header('location:'.$link);
}
function alertSess($class,$mess,$link){
	$_SESSION['alert_class'] = $class;
	$_SESSION['alert_message'] = $mess;
	rount($link);
}
function alertShow(){
	if(isset($_SESSION['alert_class']) && isset($_SESSION['alert_message'])){
		echo '<div class="alert alert-'.$_SESSION['alert_class'].'">'.$_SESSION['alert_message'].'</div>' ;
	}
}

function customerAuth(){
	if(empty($_SESSION['auth']) || $_SESSION['user']['type'] != 'customer'){
		rount('index.php');
	}

}

function user($data){
	return ($_SESSION['user'][$data] ?? 'ไม่มีข้อมูล');
}

function auth(){
	if(empty($_SESSION['auth'])){
		rount('index.php');
	}
}

function sellerAuth(){
	if(empty($_SESSION['auth']) || $_SESSION['user']['type'] != 'seller'){
		rount('index.php');
	}

}
?>