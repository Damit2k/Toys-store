<?php
	$id_user = $_GET['id_user'];
	$danhmuc = $db->get('danhmuc',array());
	$kh = $db->get('taikhoan',array('id_user'=>$id_user));
	if (isset($_POST['submit'])) {
		$diachimoi = $_POST['diachimoi'];
		$run = $db->update('taikhoan',array('diachi'=>$diachimoi),array('id_user'=>$id_user));
	}
	require_once('./view/V_khdiachi.php');
?>