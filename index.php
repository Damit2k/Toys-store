<?php
session_start();

	require('./model/database.php');
	
	$db = new database();
	if(isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	} else {
		$controller = 'trangchu';
	}

	switch ($controller) {
		case 'trangchu':
			require_once('./controller/C_trangchu.php');
			break;
		case 'giohang':
			require_once('./controller/C_giohang.php');
			break;
		case 'addgiohang':
			require_once('./controller/C_addgiohang.php');
			break;
		case 'addgiohangproduct':
			require_once('./controller/C_addgiohangproduct.php');
			break;
		case 'xuly_giohang':
			require_once('./controller/C_xuly_giohang.php');
			break;
		case 'products':
			require_once('./controller/C_products.php');
			break;
		case 'timkiem':
			require_once('./controller/C_timkiem.php');
			break;
		case 'danhmuc':
			require_once('./controller/C_danhmuc.php');
			break;
		case 'khachhang':
			require_once('./controller/C_khachhang.php');
			break;
		case 'dangnhap':
			require_once('./controller/C_dangnhap.php');
			break;
		case 'dangky':
			require_once('./controller/C_dangky.php');
			break;	
		case 'dangkythanhcong':
			require_once('./controller/C_dangkythanhcong.php');
			break;		
		case 'khdiachi':
			require_once('./controller/C_khdiachi.php');
			break;
		case 'admin':
			require_once('./controller/admin/C_admin.php');
			break;	
		case 'sanpham':
			require_once('./controller/admin/C_sanpham.php');
			break;
		case 'suasanpham':
			require_once('./controller/admin/C_suasanpham.php');
			break;	
		case 'themsanpham':
			require_once('./controller/admin/C_themsanpham.php');
			break;
		case 'dathang':
			require_once('./controller/C_dathang.php');
			break;
		case 'logout':
			require_once('./controller/C_logout.php');
			break;
		default:
			echo "Lỗi trang";
			break;

	}
?>