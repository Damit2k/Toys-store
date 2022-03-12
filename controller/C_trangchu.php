<?php
	$all = $db->get('sp',array());
	$danhmuc = $db->get('danhmuc',array());
	$spmoi = $db->get('sp',array('status'=>'moi'));
	$spbanchay = $db->get('sp',array('status'=>'banchay'));
	$spbanchay2 = $db->get('sp',array('status'=>'banchay2'));
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
					$_SESSION['username'] = $user;
					header('location: ?controller=khachhang&id_user='.$value['id_user']);

				}
	}

	require_once('./view/V_trangchu.php');

?>

