<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('dist/img/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url('dist/img/hero.jpg')?>');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Beli Produk
				</span>

                <?php echo form_open("beli/beliProduk", 'class="login100-form validate-form p-b-33 p-t-5"')?>
                    <div class="wrap-input100 validate-input" data-validate = "Enter tanggal">
						<input class="input100" type="date" name="tanggal" placeholder="Tanggal">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter jumlah">
						<input class="input100" type="text" name="jumlah" placeholder="Jumalah">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter user">
						<input class="input100" type="text" name="users_id" placeholder="User">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Produk">
						<input class="input100" type="text" name="produk_id" placeholder="Produk">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn">
						<a href="">daftar</a>
					</div>
                <?php echo form_close() ?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('dist/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('dist/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('dist/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('dist/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('dist/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('dist/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('dist/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('dist/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('dist/js/main.js')?>"></script>

</body>
</html>