<?php
$danhmuc = $db->get('danhmuc',array());
function is_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
function is_sdt($str) {
	$rules_save = [
    'sdt' => ['required', 'regex:^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$']] ? FALSE : TRUE;
	return !$rules_save;
}
	if (isset($_POST['save'])) {
		/*$name = $_POST['name'];
		$user = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];		
		$sinhnhat = $_POST['sinhnhat'];
		$sdt = $_POST['sdt'];
		$email = $_POST['email'];
		$diachi = $_POST['diachi'];*/
		$gioitinh = $_POST['gioitinh'];
		$error = array();
		$data = array();
		$data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
   		$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    	$data['user'] = isset($_POST['username']) ? $_POST['username'] : '';
    	$data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
    	$data['repassword'] = isset($_POST['repassword']) ? $_POST['repassword'] : '';
    	$data['sinhnhat'] = isset($_POST['sinhnhat']) ? $_POST['sinhnhat'] : '';
    	$data['diachi'] = isset($_POST['diachi']) ? $_POST['diachi'] : '';
    	$data['sdt'] = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    	$checkUser = $db->getNoLimit('taikhoan',array('username'=>$data['user']));
    	foreach ($checkUser as $key => $value) {
    		$dbUser = $value['username'];
    		$dbEmail = $value['email'];
    	
		if (!$data['name']) {
			$error['name'] = 'Bạn chưa nhập tên';
		} 

		if(!$data['user']) {
			$error['user'] = 'Bạn chưa nhập tên tài khoản';
		} else if ($dbUser == $data['user']) {
			$error['user'] = 'Tên tài khoản đã tồn tại';
		} 

		if(!$data['password']) {
			$error['password'] = 'Bạn chưa nhập mật khẩu';
		} else if (strlen($data['password']) < 6) {
			$error['password'] = 'Mật khẩu phải nhiều hơn 6 kí tự';
		}

		if(!$data['repassword']) {
			$error['repassword'] = 'Bạn chưa điền lại mật khẩu';
		} else if ($data['password'] != $data['repassword']) {
			$error['repassword'] = 'Nhập lại mật khẩu chưa đúng';
		}

		if(!$data['sinhnhat']) {
			$error['sinhnhat'] = 'Bạn chưa điền ngày sinh';
		}

		if(!$data['diachi']) {
			$error['diachi'] = 'Bạn chưa điền địa chỉ';
		}

		if(!$data['sdt']) {
			$error['sdt'] = 'Bạn chưa điền sđt';
		} else if (!is_numeric($data['sdt']) || strlen($data['sdt']) > 10 || strlen($data['sdt']) < 10) {
			$error['sdt'] = 'Số điện thoại phải là kiểu số và có 10 số';
		} else if(!is_sdt($data['sdt'])) {
			$error['sdt'] = 'Số điện thoại không hợp lệ';
		}

		if(!$data['email']) {
			$error['email'] = 'Bạn chưa điền email';
		} else if (!is_email($data['email'])) {
			$error['email'] = 'Email không đúng định dạng';
		} else if($dbEmail == $data['email']) {
			$error['email'] = 'Email đã tồn tại';
		}
	}
		if(!$error) {			
			echo "<script>
				alert('Bạn đã đăng ký thành công');
				window.location.href='?controller=dangnhap';
				</script>";
			$run = $db->insert('taikhoan',array('name'=>$data['name'],'username'=>$data['user'],'sdt'=>$data['sdt'],'pass'=>$data['password'],'gioitinh'=>$gioitinh,'sinhnhat'=>$data['sinhnhat'],'email'=>$data['email'],'diachi'=>$data['diachi']));	
		}
	}

	require_once('./view/V_dangky.php');
?>