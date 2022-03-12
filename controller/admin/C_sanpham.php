<?php
	if (isset($_GET['keyword'])) {
		$keyword = $_GET['keyword'];
		$sanpham = $db->adminSanPhamTimKiem($keyword);
	} else {
		$sanpham = $db->adminDanhmuc();
	}
	if(isset($_GET['id']) && isset($_GET['delete'])) {
		$id = $_GET['id'];
		if($db->delete('sp',array('id'=>$id))) {
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Xóa thành công');
    window.location.href='?controller=sanpham';
    </script>");
		} else {
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Xóa thất bại');
    window.location.reload();
    </script>");
		}
	}
			
require_once('./view/admin/V_sanpham.php');
?>