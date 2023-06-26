<?php 
require "functions.php";

session_start();
if (isset($_SESSION['userID'])) {
  $userID = $_SESSION['userID'];
  $nama = $_SESSION['nama'];
  $universitas = $_SESSION['universitas'];
  $jurusan = $_SESSION['jurusan'];
  $semester = $_SESSION['semester'];
  $email = $_SESSION['email'];
  $alamat = $_SESSION['alamat'];
  $no_hp = $_SESSION['no_hp'];
  $periode_mulai = $_SESSION['periode_mulai'];
  $periode_akhir = $_SESSION['periode_akhir'];

 
 
} else {
  echo "User data not found.";
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
            <a class="navbar-brand ml-5" href="./"
              ><img class="logo-nav" src="./img/logo_diskominfo.png" alt=""
            /></a>

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
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navbarNavAltMarkup"
            >
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
                  <a
                    id="button-sidebar"
                    href="./dashboard-mhs.php"
                    id="button-sidebar"
                  >
                    Home</a
                  >
                </div>
              </div>
            </div>
            <div class="button-sidebar-section">
              <div class="row">
                <div class="col-2 m-auto"></div>
                <div class="col-10 mt-3">
                  <a
                    id="button-sidebar"
                    href="./registrasi-magang.php"
                    id="button-sidebar"
                  >
                    Pendaftaran</a
                  >
                </div>
              </div>
            </div>
            <div class="button-sidebar-section">
              <div class="row">
                <div class="col-2 m-auto"></div>
                <div class="col-10 mt-3">
                  <a
                    id="button-sidebar-active"
                    href="./notifikasi-mhs.php"
                    id="button-sidebar"
                  >
                    Notifikasi</a
                  >
                </div>
              </div>
            </div>
            <div class="button-sidebar-section">
              <div class="row">
                <div class="col-2 m-auto"></div>
                <div class="col-10 mt-3">
                  <a
                    id="button-sidebar"
                    href="./about-mhs.php"
                    id="button-sidebar"
                  >
                    About</a
                  >
                </div>
              </div>
            </div>
            <div class="button-sidebar-section">
              <div class="row">
                <div class="col-2 m-auto"></div>
                <div class="col-10 mt-3">
                  <a
                    id="button-sidebar"
                    href="./dashboard-mhs.php"
                    id="button-sidebar"
                  >
                    Logout</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of sidebar -->
        <div class="col">
          <div class="container-content p-5 text-center">
            <h3>DINAS KOMUNIKASI DAN INFORMATIKA KOTA TEGAL</h3>

            <div class="container-form-magang text-left">
              <div class="row">
                <div class="col">
                  <p>Nama</p>
                  <p>Universitas</p>
                  <p>Jurusan</p>
                  <p>Semester</p>
                  <p>Email</p>
                  <p>Alamat</p>
                  <p>No. Hp</p>
                  <p>Periode Mulai</p>
                  <p>Periode Akhir</p>
                  <p>Status</p>
                </div>
                <div class="col">
                  <p>: <?= $nama; ?></p>
                  <p>: <?= $universitas; ?></p>
                  <p>: <?= $jurusan; ?></p>
                  <p>: <?= $semester; ?></p>
                  <p>: <?= $email; ?></p>
                  <p>: <?= $alamat; ?></p>
                  <p>: <?= $no_hp; ?></p>
                  <p>: <?= $periode_mulai; ?></p>
                  <p>: <?= $periode_akhir; ?></p>
            
                  <p>: Pending</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
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
