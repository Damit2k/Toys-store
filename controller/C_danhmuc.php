<?php
	$danhmuc = $db->get('danhmuc',array());
	$id_dm = $_GET['id_dm'];
	$name = $db->nameDanhmuc('danhmuc',array('id_dm' => $id_dm));
	if (isset($_POST['duoi500'])) {
		$duoi500 = $_POST['duoi500'];
		$spdanhmuc = $db->getNoLimit('sp',array('id_dm' => $id_dm,'price<' => '500000'));
	} else if (isset($_POST['tren500'])) {
		$tren500 = $_POST['tren500'];
		$spdanhmuc = $db->getNoLimit('sp',array('id_dm' => $id_dm,'price>' => '500000', 'price<' => '1000000'));
	} else if (isset($_POST['duoi300'])) {
		$duoi300 = $_POST['duoi300'];
		$spdanhmuc = $db->getNoLimit('sp',array('id_dm' => $id_dm,'price<' => '300000'));
	} else if (isset($_POST['tren1000'])) {
		$tren1000 = $_POST['tren1000'];
		$spdanhmuc = $db->getNoLimit('sp',array('id_dm' => $id_dm,'price>' => '1000000'));
	} else {
		$spdanhmuc = $db->getNoLimit('sp',array('id_dm' => $id_dm));
	}
	if(isset($_POST['submit'])) {
		$user = $_POST['username'];
		$password = $_POST['password'];
		$tk = $db->dangNhap('taikhoan',array('username'=>$user,'pass'=>$password));
		$khachhang = $db->getNoLimit('taikhoan',array('username'=>$user,'pass'=>$password));
		foreach ($khachhang as $key => $value) {	
		}
		if (!$user || !$password || mysqli_num_rows($tk)==0) {
					header("location: ?controller=dangnhap");
				} else if ($user == 'admin' && $password == 'admin') {
					header('location: ?controller=admin');
				}else {
					header('location: ?controller=khachhang&id_user='.$value['id_user']);
				}	
	}
	require_once('./view/V_danhmuc.php');
?>