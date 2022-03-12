<!DOCTYPE html>
<html>
<head>
	<title>
		Kollector Vietnam
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./view/css/home.css">
	<link rel="stylesheet" type="text/css" href="./view/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./view/icons/font/bootstrap-icons.css">
	<link rel="icon" type="img/x-icon" href="./view/img/logo.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<!-- top -->
<header>
	<div class="container-fluid top">
			<div class="row">
				<p>Mô Hình & Quà Tặng Công Nghệ</p>
			</div>
		</div>
	</div>

<!-- MENU -->
	<div class="container-fluid menu">
			<div class="row justify-content-md-center">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4-auto">
					<a href="?controller=trangchu">Kollector Vietnam</a>
				</div>
				<div class="col-md-4">	
					<div class="icon col-md-6">	
						<div class="icon-dropdown">
							<button onclick="myFunction2()" ><h4><i class="bi bi-person-circle"></i></h4></button>
							<div id="myDropdown2" class="dropdown-menu timkiemdropdown">
								<div class="container timkiem-tk">
									<form method="POST">
										<input type="hidden" name="controller">
										<h6>ĐĂNG NHẬP TÀI KHOẢN</h6>
										<input class="timkiem-inputtk" onkeyup="filterFunction2()" type="text" placeholder="Tên tài khoản" value="" name="username">
										<input class="timkiem-inputtk" onkeyup="filterFunction()" type="password" placeholder="Mật khẩu" value="" name="password">
										<div class="sitebox-recaptcha">
											This site is protected by reCAPTCHA and the Google
											<a href="https://policies.google.com/privacy" class="timkiem-a" target="_blank" rel="noreferrer">Privacy Policy</a> 
											and <a href="https://policies.google.com/terms" class="timkiem-a" target="_blank" rel="noreferrer">Terms of Service</a> apply.
										</div>
										<button name="submit" type="submit" class="timkiem-button btn btn-secondary">ĐĂNG NHẬP</button>
										<div class="taotk">
											<p class="taotk-p">Khách hàng mới? <a href="?controller=dangky" class="taotk-a">Tạo tài khoản</a></p>
											<p>Quên mật khẩu? <a href="" class="taotk-a">Khôi phục mật khẩu</a></p>
										</div>
									</form>
								</div>
							</div>					
						</div>
						
						<div class="icon-dropdown">
							<button onclick="myFunction()" ><h4><i class="bi bi-search"></i></h4></button>
							<div id="myDropdown" class="dropdown-menu timkiemdropdown">
								<div class="container">
									<form method="get" action="index.php">
										<input type="hidden" name="controller" value="timkiem">
										<h6>TÌM KIẾM</h6>
										<input class="timkiem-inputsearch" onkeyup="filterFunction()" type="text" placeholder="Tìm kiếm sản phẩm" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>" name="keyword"><button type="submit" id="btn-search"><i class="bi bi-search"></i></button>		
									</form>
								</div>
							</div>					
						</div>
					</div>
				</div>
			</div>
	</div>

<!-- NAVBAR -->
	<div class="container">
				<nav class="navbar navbar-expand-lg navbar-bold">
  					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  					</button>
 					 <div class="topnav collapse navbar-collapse" id="navbarNavDropdown">
					    <ul class="navbar-nav">
					      <li class="nav-item active">
					        <a class="nav-link a" href="?controller=trangchu">Trang chủ <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link a" href="#">Giới Thiệu</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link a" href="?controller=giohang">Giỏ Hàng</a>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link a dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Sản Phẩm
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					         <?php foreach ($danhmuc as $key => $value) {
					        	?>
					      	 	  <a class="dropdown-item" href="?controller=danhmuc&id_dm=<?php echo $value['id_dm']?>"><?php echo $value['dm_name']?></a>
					    	<?php } ?>
					        </div>
    		 				</li>
   						</ul>
  					</div>
				</nav>
	</div>

</header>
<!-- GIO HANG -->
<main>
	<div class="main">
		<div class="container-fluid">
			<div class="row browse">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<a href="">Trang chủ &nbsp;/&nbsp;</a>
							<a href="">Giỏ hàng</a>
						</div>
					</div>
				</div>	
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-4-auto">
					<h3>Giỏ hàng của bạn</h3>
				</div>
			</div>
			<div class="row justify-content-md-center giohang-header">
				<div class="col-md-4-auto">
					<p style="font-size: 15px;">Các sản phẩm trong giỏ hàng bên dưới</p>
				</div>
			</div>
			<div class="container">
			<div class="row">
				<div class="col-md-8">
					<table class="table table-condensed" cellspacing="0" cellpadding="2rem">			
				<?php 
				$amount = 0;
				if(isset($_SESSION['cart'])) {
					foreach($_SESSION['cart'] as $key => $value) {
					$amount += $value['sl']*$value['price'];
					$b = $value['img_link'];
					$split = preg_split("(\s)",$b);
				?>
						<tbody>
							<tr>													
								<td class="td-img">				
									<img class="giohang-img" src="<?php echo $split[0] ?>"></td>
								<td>
									<h4 class="giohang-title"><?php echo $value['name'] ?></h4>
										<p class="giohang-price"><?php echo number_format($value['price']) ?>₫</p>
										<p class="giohang-soluong"><span class="cong"><a class="cong-btn" href="?controller=xuly_giohang&method=prev&id=<?php echo $value['id'] ?>" >-</a></span>
										<span class="soluong"><?php echo $value['sl'] ?></span>
										<span class="cong"><a class="cong-btn" href="?controller=xuly_giohang&method=next&id=<?php echo $value['id'] ?>">+</a></span></p>
										
								</td>
								<td class="giohang-x">
									<a href="?controller=xuly_giohang&method=del&id=<?php echo $value['id'] ?>" class="xoa">X</a><br>
									<span class="giohang-sptien"><?php echo number_format($value['sl']*$value['price']) ?>₫</span></p>
								</td>
							</tr>
							<?php } }else{?>
								<div class="row cach">
									<div class="col-md-12">
										<h4 class="text">Giỏ hàng trống</h4>
									</div>
								</div>
							<?php } ?>
						</tbody>
					</table>
					<div class="row giohang-ghichu">
						<div class="col-md-5">
							<h6 class="ghichu">Ghi chú đơn hàng</h6>
							<textarea placeholder="Ghi chú" ></textarea>
						</div>
						<div class="col-md-7">
							<h6 class="ghichu">Chính sách mua hàng</h6>
							<p><i class="bi bi-arrow-right"></i> Sản phẩm được đổi 1 lần duy nhất, không hỗ trợ trả.<br><i class="bi bi-arrow-right"></i>
							Sản phẩm còn đủ tem mác, chưa qua sử dụng.
							<br><i class="bi bi-arrow-right"></i> Sản phẩm công nghệ được bảo hành lỗi 1 đổi 1 trong vòng 7 ngày kể từ khi nhận hàng !<br>
							<i class="bi bi-arrow-right"></i> Sản phẩm Sale không hỗ trợ đổi trả !	
						</div>		
					</div>
				</div>

<!-- gio hang ben phai -->
				<div class="col-md-4">
					<div class="giohang-tongtien giohang-tongtien-border">
						<h5>Thông tin đơn hàng</h5>
						<ul>							
							<li>
								<p><span class="giohang-tongtien-title">Tổng tiền:</span> <span class="giohang-tongtien-price"><?php echo number_format($amount)?>₫</span></p>
							</li>
							<li>
								<p>Phí vận chuyển sẽ được tính ở trang thanh toán.<br>
								Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
							</li>
									<button class="btn btn-danger" onclick="location.href='?controller=dathang&amount=<?php echo number_format($amount) ?>'">THANH TOÁN</button>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="container-fluid giohang-footer rem20">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					 <i class="bi bi-envelope-fill"> </i> Đăng ký nhận tin:
					<input type="type" placeholder="Email của bạn" name="">
					<button class="btn btn-secondary">ĐĂNG KÝ</button>
					<i class="bi bi-telephone-fill"></i> Hỗ trợ / Mua hàng: 0981253684
				</div>
			</div>
		</div>
	</div>
</main>
<!-- FOOTER -->
<footer>
	<div class="container footer">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-aboutus">
					<h5>Giới Thiệu</h5>
					<br>
					<p>Kollector VN là trang mua sắm trực tuyến sản phẩm Đồ chơi mô hình & Quà tặng công nghệ. Thường xuyên theo dõi website của chúng mình để liên tục được cập nhật nhé !</p>
					<img src="./view/img/logo.png">
				</div>
			</div>
			<div class="col-md-2">
				<div>
					<h5>Liên Kết</h5>
					<br>
					<ul>
						<li><a class="a" href="">Tìm kiếm</a></li>
						<li><a class="a" href="">Giới thiệu</a></li>
						<li><a class="a" href="">Chính sách đổi trả</a></li>
						<li><a class="a" href="">Chính sách bảo mật</a></li>
						<li><a class="a" href="">Điều khoản dịch vụ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<h5>Thông Tin Liên Hệ</h5>
					<br>
					<ul>
						<li><i class="bi bi-house-door-fill"></i> 51 Ngõ 318 Đê La Thành, Hà Nội</li>
						<li><i class="bi bi-telephone-fill"></i> 0833115555</li>						
						<li><i class="bi bi-envelope-fill"></i> kollectorvn@gmail.com</li>
					</ul>
				</div>
			</div>
			<div class="col-md-1">
				<div class="footer-fanpage">
					<h5>Fanpage</h5>
					<br>
					<div class="footer-static-content"> 
								<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/kollector.vn" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=335&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkollector.vn&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false"><span style="vertical-align: bottom; width: 335px; height: 130px;"><iframe name="f34b1b57c54f494" width="1000px" height="300px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v10.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df34a3a0c53094c8%26domain%3Dkollector.vn%26origin%3Dhttps%253A%252F%252Fkollector.vn%252Ff2799f20b1d1ce4%26relation%3Dparent.parent&amp;container_width=335&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkollector.vn&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false" style="border: none; visibility: visible; width: 335px; height: 130px;" class=""></iframe></span></div>
							</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-4 copyright">
				Copyright © 2021 Kollector Vietnam. Powered by Damit
			</div>
		</div>
	</div>
</footer>

<script src="./view/bootstrap/jquery-3.3.1.min.js"></script>
<script src="./view/bootstrap/popper.min.js"></script>
<script src="./view/bootstrap/js/bootstrap.min.js"></script>
<script src="./view/bootstrap/js/bootstrap.js"></script>

</body>
</html>