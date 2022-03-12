
<?php
	$id_user = $_GET['id_user'];
	$danhmuc = $db->get('danhmuc',array());
	$kh = $db->get('taikhoan',array('id_user'=>$id_user));

	require_once('./view/V_khachhang.php');
?>