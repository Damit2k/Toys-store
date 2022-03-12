<!DOCTYPE html>
<html>
<head>
	<title>
		Kollector Vietnam - Thanh toán giỏ hàng
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
	<div class="container">
		<div class="row">
			<div class="col-md-12 dathang">
				<div class="row">
				<div class="col-md-4 dathang-left">
					<a class="a" href="?controller=trangchu">Kollector Vietnam</a>
					<div class="row">
						<div class="col-md-9 dathang-brcrumb">
							<a class="brcrumb1" href="?controller=giohang">Giỏ hàng &nbsp;/&nbsp;</a>
							<a>Thông tin giao hàng &nbsp;/&nbsp;</a>
							<a>Phương thức thanh toán</a>
						</div>
					</div>
					<h5>Thông tin giao hàng</h5>
					<p>Bạn đã có tài khoản? &nbsp;<a class="dathang-dangnhap" href="?controller=dangnhap">Đăng nhập</a></p>
					
					<div class="row" style="margin-left: 1px;">
							<form>
							<div class="form-group">
							    <label for="exampleInputEmail1">Email address</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Số điện thoại</label>
							    <input name="sdt" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Địa chỉ</label>
							    <input name="diachi" class="form-control" id="exampleInputPassword1" placeholder="Địa chỉ">
							  </div>

							  
						  <button type="submit" style="margin: 8px 0 10px 0;" class="btn btn-primary">Thanh toán</button>

						</form>
					</div>
				</div>
				<div class="col-md-6" style="margin: auto">
					<?php 
				$amount=0;
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
										<p class="giohang-soluong">Số lượng:<span class="soluong"><?php echo $value['sl'] ?> , Giá: <?php echo number_format($value['sl']*$value['price']) ?>₫</span>
										<span class="giohang-sptien"></span>
										</p>
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
						<br>
					<p><span class="giohang-tongtien-title">Tổng tiền: </span><span style="font-size: 20px;font-weight: bold;color: red;"><?php echo number_format($amount)?>₫</span></p>
				</div>

			</div>
				
			</div>
		</div>
	</div>
	<br>

<div class="container-fluid">
	<footer style="margin-top: 5%;">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-4 copyright">
				Copyright © 2021 Kollector Vietnam. Powered by Damit
			</div>
		</div>
	</div>
</footer>
</div>
</body>

<script src="./view/bootstrap/jquery-3.3.1.min.js"></script>
<script src="./view/bootstrap/popper.min.js"></script>
<script src="./view/bootstrap/js/bootstrap.min.js"></script>
<script src="./view/bootstrap/js/bootstrap.js"></script>


</html>