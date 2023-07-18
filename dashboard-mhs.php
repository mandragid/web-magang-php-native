<?php


require "functions.php";

session_start();


// Periksa apakah user sudah login atau belum
if (!isset($_SESSION['user_id'])) {
    // User belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Jika tombol logout ditekan
if (isset($_POST['logout'])) {
    logout();
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
  <style>
                    #button-sidebar {
                     
	                    padding: 0;
                      display: flex;
	                    justify-content: center;
	                    align-items: center;
	                    width: 100%;
	                    height: 100%;
	                    border: none;
	                    text-decoration: none;
                    }

                    #button-sidebar {
                      font-size: 20px;  
                    }
                    #button-sidebar-active {
                      font-size: 20px;  
                    }

                    
                  </style>
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
                    id="button-sidebar-active"
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
                    id="button-sidebar"
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
                <form action="" method="post">
                <button
                    id="button-sidebar"
                    href="./dashboard-mhs.php"
                    id="button-sidebar"
                    name="logout"
                  >
                    Logout</button
                  >

                </form>  
                
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of sidebar -->
        <div class="col">
          <div class="container-content p-5 text-center">
            <h3>SELAMAT DATANG MAHASISWA</h3>
            <h4>DINAS KOMUNIKASI DAN INFORMATIKA KOTA TEGAL</h4>
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
