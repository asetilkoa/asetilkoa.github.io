<?php 
	require_once('koneksi.php');
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div>
	<?php
	
	?>	
</div>

<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center form_container">
				<form>
					<h2>Registrasi</h2>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>					
						</div>
						<input type="text" name="email" id="email" class="form-control input_user" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="submit" name="create" id="register" class="btn login_btn">Register</button> 
			</div>
			</form>
			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Sudah punya akun? <a href="home.php" class="ml-2">Login</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="registrasi.js"></script>
</body>
</html>