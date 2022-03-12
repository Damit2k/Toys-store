<?php
session_start();
$id = $_GET['id'];

	$sp = $db->get('sp',array('id'=>$id));

	if (isset($_SESSION['cart'])) {
		
		if(isset($_SESSION['cart'][$id])) {
		
			$_SESSION['cart'][$id]['sl']+=1;
		
		} else {
			$_SESSION['cart'][$id]['id']=$sp[0]['id'];
			$_SESSION['cart'][$id]['sl']=1;
			$_SESSION['cart'][$id]['price']=$sp[0]['price'];
			$_SESSION['cart'][$id]['img_link']=$sp[0]['img_link'];
			$_SESSION['cart'][$id]['name']=$sp[0]['name'];
		}
	} else {
		$_SESSION['cart'][$id]['id']=$sp[0]['id'];
			$_SESSION['cart'][$id]['sl']=1;
			$_SESSION['cart'][$id]['price']=$sp[0]['price'];
			$_SESSION['cart'][$id]['img_link']=$sp[0]['img_link'];
			$_SESSION['cart'][$id]['name']=$sp[0]['name'];
	}
	header('location: ?controller=giohang');  

?>