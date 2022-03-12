<?php 
    if(isset($_POST['submit'])) {
    	$img_link = $_POST['img_link'];
    	$name = $_POST['name'];
    	$dm = $_POST['dm_name'];
    	$price = $_POST['price'];
    	$tonkho = $_POST['tonkho'];
    	$daban = $_POST['daban'];
    	$content = $_POST['content'];
    	if($db->insert('sp',array('img_link'=>$img_link,'name'=>$name,'id_dm'=>$dm,'price'=>$price,'tonkho'=>$tonkho,'daban'=>$daban,'content'=>$content))) {
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Thêm thành công');
    window.location.href='?controller=themsanpham';
    </script>");
        } else {
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Bạn cần điền đầy đủ thông tin sản phẩm');
    window.location.reload();
    </script>");
        }
    	
    }
    require_once('./view/admin/V_themsanpham.php');
?>