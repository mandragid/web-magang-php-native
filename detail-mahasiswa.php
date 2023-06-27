<?php 
include "functions.php";

if (isset($_GET['id'])) {
    $mahasiswa_id = $_GET['id'];
  
    // Query untuk mengambil data mahasiswa berdasarkan ID
    $query = "SELECT * FROM data_mahasiswa WHERE id = $mahasiswa_id";
    $result = mysqli_query($conn, $query);
  
    // Cek apakah data ditemukan
    if (mysqli_num_rows($result) > 0) {
      $mahasiswa = mysqli_fetch_assoc($result);
    } else {
      echo "Data not found"; // Tampilkan pesan jika data tidak ditemukan
    }
  }
  

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./index.css" />
<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png" />
  <title>Detail Mahasiswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

   

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 8px;
      border: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .btn-back {
      display: inline-block;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

    .btn-back:hover {
      background-color: #555;
    }

    .btn-save {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

    .btn-save:hover {
      background-color: #45a049;
    }

    .status-select {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
    }
  </style>

  
</head>
<body>
<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
			<a class="navbar-brand ml-5" href="./"><img class="logo-nav" src="./img/logo_diskominfo.png" alt="" /></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
		</nav>
		<!-- end of navigation bar -->
    <div class="row">
      <div class="col"><h2>Detail Mahasiswa</h2>
    <table>
      <tr>
        <th>Nama</th>
        <th>Universitas</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Periode Mulai</th>
        <th>Periode Akhir</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
      <tr>
        <td><?= $mahasiswa['nama'] ?></td>
        <td><?= $mahasiswa['universitas'] ?></td>
        <td><?= $mahasiswa['jurusan'] ?></td>
        <td><?= $mahasiswa['semester'] ?></td>
        <td><?= $mahasiswa['email'] ?></td>
        <td><?= $mahasiswa['alamat'] ?></td>
        <td><?= $mahasiswa['no_hp'] ?></td>
        <td><?= $mahasiswa['periode_mulai'] ?></td>
        <td><?= $mahasiswa['periode_akhir'] ?></td>
        <td>
          <select class="status-select" id="status-select">
            <option value="1" <?= $mahasiswa['status'] == 1 ? 'selected' : '' ?>>Terima</option>
            <option value="0" <?= $mahasiswa['status'] == 0 ? 'selected' : '' ?>>Tolak</option>
          </select>
        </td>
        <td>
          <button class="btn-save" onclick="saveStatus()">Simpan</button>
        </td>
      </tr>
    </table>
    <a class="btn-back" href="list-pendaftar.php">Kembali</a>
  </div>
</div>
    </div>

</body>
</html>
