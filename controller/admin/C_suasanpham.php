<?php
	$id = $_GET['id'];
	if(isset($_GET['delete'])) {
		if($db->delete('sp',array('id'=>$id))) {
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Xóa thành công');
    window.location.href='?controller=sanpham';
    </script>");
		} else {
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Xóa thất bại');
    window.location.href.reload();
    </script>");
		}
	}
	$sanpham = $db->adminSuaSanPham($id);
	$products = $db->getNoLimit('sp',array('id'=>$id));
	foreach ($products as $key => $value) {
		$id_dm = $value['id_dm'];
		$a = $value['img_link'];
	}
	$split = preg_split("(\s)",$a); 
	if (isset($_POST['submit'])) {
		if(isset($_POST['img_link']) && !empty($_POST['img_link'])) {		
		 $run = $db->update('sp',array('img_link'=>$img_link),array('id'=>$id));
		 header('refresh: 0');
		}
		if(isset($_POST['name']) && !empty($_POST['name'])){
			$name = $_POST['name'];
			$run = $db->update('sp',array('name'=>$name),array('id'=>$id));
			header('refresh: 0');
		}
		if(isset($_POST['trangthai']) && !empty($_POST['trangthai'])) {
			$trangthai = $_POST['trangthai'];
			$run = $db->update('sp',array('status'=>$trangthai),array('id'=>$id));
		}
		if(isset($_POST['dm_name']) && !empty($_POST['dm_name'])){
			$dm_name = $_POST['dm_name'];
			$run = $db->update('sp',array('dm_name'=>$dm_name),array('id'=>$id));
			header('refresh: 0');
		}
		if(isset($_POST['price']) && !empty($_POST['price'])) {
			$price = $_POST['price'];
			$run = $db->update('sp',array('price'=>$price),array('id'=>$id));
			header('refresh: 0');
		}
		if(isset($_POST['tonkho']) && !empty($_POST['tonkho'])) {
			$tonkho = $_POST['tonkho'];
			$run = $db->update('sp',array('tonkho'=>$tonkho),array('id'=>$id));
			header('refresh: 0');
		}
		if(isset($_POST['daban']) && !empty($_POST['daban'])) {
			$daban = $_POST['daban'];
			$run = $db->update('sp',array('daban'=>$daban),array('id'=>$id));
			header('refresh: 0');
		}
		if(isset($_POST['content']) && !empty($_POST['content'])){
			$content = $_POST['content'];
			$run = $db->update('sp',array('content'=>$content),array('id'=>$id));
			header('refresh: 0');
		}
	}
	require_once('./view/admin/V_suasanpham.php');
?>