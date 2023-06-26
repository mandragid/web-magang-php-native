<?php
 
require 'functions.php';

if(isset($_POST['submit'])){
	$inserted_id = daftarMagang($_POST);
  if(daftarMagang($_POST) > 0) { 

	session_start();
	$_SESSION['userID'] = $inserted_id;
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['universitas'] = $_POST['universitas'];
	$_SESSION['jurusan'] = $_POST['jurusan'];
	$_SESSION['semester'] = $_POST['semester'];
	$_SESSION['alamat'] = $_POST['alamat'];
	$_SESSION['no_hp'] = $_POST['no_hp'];
	$_SESSION['periode_mulai'] = $_POST['periode_mulai'];
	$_SESSION['periode_akhir'] = $_POST['periode_akhir'];
	$_SESSION['email'] = $_POST['email'];
    
	echo "
    <script>
    alert('Registrasi Magang Sukses!');
    document.location.href='notifikasi-mhs.php?id=$inserted_id';
    </script>
  "; 
  } else {
  echo "
    <script>
    alert('Harap isi semua data!');
    </script>";
  } 
} 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./index.css" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png" />
		<title>Dashboard Mahasiswa Magang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
						<a class="navbar-brand ml-5" href="./"><img class="logo-nav" src="./img/logo_diskominfo.png" alt="" /></a>

						<button
							class="navbar-toggler"
							type="button"
							data-toggle="collapse"
							data-target="#navbarNavAltMarkup"
							aria-controls="navbarNavAltMarkup"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
							<div class="navbar-nav ms-auto"></div>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				<!-- sidebar -->
				<div class="col-2">
					<div class="container-sidebar text-center pl-4">
						<div class="button-sidebar-section">
							<div class="row">
								<div class="col-2 m-auto"></div>
								<div class="col-10 mt-3">
									<a id="button-sidebar" href="./dashboard-mhs.php" id="button-sidebar"> Home</a>
								</div>
							</div>
						</div>
						<div class="button-sidebar-section">
							<div class="row">
								<div class="col-2 m-auto"></div>
								<div class="col-10 mt-3">
									<a id="button-sidebar-active" href="./registrasi-magang.php" id="button-sidebar"> Pendaftaran</a>
								</div>
							</div>
						</div>
						<div class="button-sidebar-section">
							<div class="row">
								<div class="col-2 m-auto"></div>
								<div class="col-10 mt-3">
									<a id="button-sidebar" href="./notifikasi-mhs.php" id="button-sidebar"> Notifikasi</a>
								</div>
							</div>
						</div>
						<div class="button-sidebar-section">
							<div class="row">
								<div class="col-2 m-auto"></div>
								<div class="col-10 mt-3">
									<a id="button-sidebar" href="./about-mhs.php" id="button-sidebar"> About</a>
								</div>
							</div>
						</div>
						<div class="button-sidebar-section">
							<div class="row">
								<div class="col-2 m-auto"></div>
								<div class="col-10 mt-3">
									<a id="button-sidebar" href="./dashboard-mhs.php" id="button-sidebar"> Logout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end of sidebar -->
				<div class="col">
					<div class="container-content p-5 text-center">
						<h3>PENDAFTARAN MAGANG</h3>
						<h4>DINAS KOMUNIKASI DAN INFORMATIKA KOTA TEGAL</h4>

						<div class="container-form-magang text-left">
							<form method="post" action="">
							<div class="row">
								<div class="col">
										<div class="form-group">
											<label for="exampleInputEmail1">Nama Lengkap</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Ketik Nama Lengkap" name="nama" required />
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Universitas</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ketik Nama Universitas" name="universitas" required />
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Jurusan</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan" name="jurusan" required/>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Semester</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Semester" name="semester" required/>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">E-mail</label>
											<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat E-mail" name="email" required />
										</div>
									</div>
									<div class="col">
										
										<div class="form-group">
											<label for="exampleInputEmail1">Alamat</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Lengkap" name="alamat" required />
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Nomor Handphone</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Handphone yang aktif" name="no_hp" required />
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Periode Mulai dd/mm/yyyy</label>
											<input type="form" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Periode Mutasi" name="periode_mulai" required />
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Periode Akhir dd/mm/yyyy</label>
											<input type="form" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Periode Akhir" name="periode_akhir"  required/>
										</div>
										
										<div class="row justify-content-center mt-5">
											<button type="submit" name="submit" value="Submit" class="btn btn-primary">Registrasi</button>
										</div>
										
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"
		></script>
	</body>
</html>
