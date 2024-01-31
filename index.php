<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Laundry PU - www.malasngoding.com</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>
<body style="background: url('gambar.jpg') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
	<br/>
	<br/>
	<br/>
	<br/>

	<center>
	<h2 style="color: #ffffff;">SISTEM INFORMASI LAUNDRY <br/> PU.COM</h2>

	</center>

	<br/>
	<br/>
	<br/>
	<br/>
	
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
				}else if($_GET['pesan'] == "logout"){
					echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
				}else if($_GET['pesan'] == "belum_login"){
					echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
				}
			}
			?>			
			
			<form action="login.php" method="post">
				<div class="panel">
					<br/>
					<div class="panel-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>	

						<input type="submit" class="btn btn-primary" value="Masuk">				
					</div>
					<br/>
				</div>
			</form>

		</div>
	</div>
	<div style="text-align: center; color: #ffffff; margin-top: 20px;">
        &copy; 2024 Jodih Manoppo
    </div>
</body>
</html>