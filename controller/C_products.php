<?php
	$danhmuc = $db->get('danhmuc',array());
	$id = $_GET['id'];
	$products = $db->get('sp',array('id'=>$id));
	$spbanchay = $db->get('sp',array('status'=>'banchay'));
	foreach ($products as $key => $value) {
		$id_dm = $value['id_dm'];
		$a = $value['img_link'];
	}
	$split = preg_split("(\s)",$a); 
	$splienquan = $db->get('sp',array('id_dm'=>$id_dm));
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

	
	require_once('./view/V_products.php');

?>