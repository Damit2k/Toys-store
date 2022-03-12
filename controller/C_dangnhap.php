<?php
$danhmuc = $db->get('danhmuc',array());
if(isset($_POST['submit'])) {
		$user = $_POST['username'];
		$password = $_POST['password'];
		$tk = $db->dangNhap('taikhoan',array('username'=>$user,'pass'=>$password));
		$khachhang = $db->getNoLimit('taikhoan',array('username'=>$user,'pass'=>$password));
		foreach ($khachhang as $key => $value) {	
		}
		if (!$user || !$password || mysqli_num_rows($tk)==0) {
					$message = "Sai tên tài khoản hoặc mật khẩu";
					echo "<script type='text/javascript'>alert('$message');</script>";
					header("refresh: 0");
				} else if ($user == 'admin' && $password == 'admin') {
					header('location: ?controller=admin');
				}else {
					$_SESSION['username'] = $user;
					header('location: ?controller=khachhang&id_user='.$value['id_user']);
				}	
		
	}
	require_once('./view/V_dangnhap.php');
?>