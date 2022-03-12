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
	<link rel="stylesheet" type="text/css" href="./view/css/animate.min.css">
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
										
										<?php if(isset($_SESSION['username'])) {
											$tk =$db->getNoLimit('taikhoan',array('username'=>$_SESSION['username']));
											foreach($tk as $key => $value){?>	
											<p>Xin chào <b><?php echo $_SESSION['username']?></b>
											</p>
											
											<p><a href="?controller=khachhang&id_user=<?php echo $value['id_user']?>"><p style="font-size: 7px;">Thông tin tài khoản</p></a></p>
										<?php } ?>
											<b>
												<a href="?controller=logout">Đăng xuất</a>
											</b>
										<?php } else {?>
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
										<?php } ?> 
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
					        <a class="nav-link a" href="#footer1" id="back">Giới Thiệu</a>
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

<!-- SLIDE SHOW -->
	<div class="container-fluid slide">
		<div class="col-md-10" style="margin: auto;">
			<div id="slidee" class="carousel" data-ride="carousel">
			<ol class="carousel-indicators">
			    <li data-target="#slidee" data-slide-to="0" class="active"></li>
			    <li data-target="#slidee" data-slide-to="1"></li>
			    <li data-target="#slidee" data-slide-to="2"></li>
		 	 </ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="./view/img/banner1.png">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="./view/img/slide1.jpg">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="./view/img/slide3.jpg">
				</div>
			</div>
			<a class="carousel-control-prev" href="#slidee" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#slidee" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div>
		</div>
	</div>
</header>
<!-- SP MỚI -->
<main>
	<div class="container-fluid spmoi">
			<div class="row justify-content-md-center">
				<h1>Sản Phẩm Mới</h1>
			</div>
	</div>


<!-- LIST SAN PHAM MOI -->
	<div class="container-fluid">
		<div class="row	justify-content-md-center">
		<?php
			foreach ($spmoi as $key => $value) {
				$a = $value['img_link'];
				$split = preg_split("(\s)",$a);			
				 ?>
			<div class="col-md-1 spcard">
				<div class="card" onclick="window.location='?controller=products&id=<?php echo $value['id']?>'">
					<img src="<?php echo $split[0]?>" class="spimg">
					<div class="card-body">
						<h5 class="card-title spname"><?php echo $value['name']?></h5>
						<p class="card-text price"><?php echo number_format($value['price'])?>₫</p>
						<a href="?controller=addgiohang&id=<?php echo $value['id'] ?>" class="cart btn btn-outline-secondary">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>

<!-- San Pham Ban Chay -->
	<div class="container-fluid spmoi">
			<div class="row justify-content-md-center">
				<h1>Sản Phẩm Bán Chạy</h1>
			</div>
	</div>

<!-- List San Pham Ban Chay -->
	<div class="container-fluid spbanchay1">
		<div class="row	justify-content-md-center">
					<?php
			foreach($spbanchay as $key => $value) { 
				$b = $value['img_link'];
				$split = preg_split("(\s)",$b);
				?>
			<div class="col-md-1 spcard">
				<div class="card" onclick="window.location='?controller=products&id=<?php echo $value['id']?>'">
					<img src="<?php echo $split[0]?>" class="spimg">
					<div class="card-body">
						<h5 class="spname card-title"><?php echo $value['name']?></h5>
						<p class="card-text price"><?php echo number_format($value['price'])?>₫</p>
						<a href="?controller=addgiohang&id=<?php echo $value['id'] ?>" class="cart btn btn-outline-secondary">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
<!-- List san pham ban chay 2 -->
		<div class="container-fluid">
		<div class="row	justify-content-md-center">
								<?php
			foreach($spbanchay2 as $key => $value) { 
				$b = $value['img_link'];
				$split = preg_split("(\s)",$b);
				?>
			<div class="col-md-1 spcard" >
				<div class="card" onclick="window.location='?controller=products&id=<?php echo $value['id']?>'">
					<img src="<?php echo $split[0]?>" class="spimg">
					<div class="card-body">
						<h5 class="spname card-title"><?php echo $value['name']?></h5>
						<p class="card-text price"><?php echo number_format($value['price'])?>₫</p>
						<a id="add" href="?controller=addgiohang&id=<?php echo $value['id'] ?>" class="cart btn btn-outline-secondary">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>

<!-- ABOUT US -->
	<div class="container-fluid aboutus">
			<div class="row justify-content-md-center">
				<div class="col-md-6 ">
					<div class="info">
						<img src="./view/img/aboutus.jpg">
					</div>
				</div>
				<div class="col-md-6">
					<div class="info-content">
						<p>Kollector VN là thương hiệu được thành lập vào đầu năm 2019 từ đam mê dành cho mô hình, công nghệ, điện ảnh và sở thích sưu tầm của nhưng người trẻ tuổi . Chúng mình mong muốn đem tới được cho khách hàng những giá trị tinh thần tích cực nhất, sự hiện đại trong đời sống hàng ngày, những món quà ấn tượng, cá tính để dành tặng người thân và thật nhiều không gian đặc biệt của riêng bạn . </p>
						<p>&nbsp;</p>
						<p>KOLLECTOR VIETNAM</p>
						<p>💻 Add: 51 Ngõ 318 Đê La Thành, Hà Nội</p>
						<p>⌚️ Opening: 9:30 - 21:30 (EveryDay)</p>
						<p>🤳🏻 Instagram: kollector.vn</p>
						<p>🤳🏻 Facebook: Kollector VN</p>
						<p>📬 Direct or call: 083.311.5555</p>
						<p>✈️ Ship hàng toàn quốc !</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid giohang-footer">
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
<!-- FOOTEER -->
<footer>
	<div class="container footer" id="footer1" onclick="window.location.hash='back';">
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
<script src="./view/assets/js/bootstrap-notify.js"></script>
<script src="./view/bootstrap/js/bootstrap.min.js"></script>
<script src="./view/bootstrap/js/bootstrap.js"></script>

</body>
</html>