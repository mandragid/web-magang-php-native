<?php
 
// tampung nama server, username db dan password db ke sebuah variabel
$servername = "localhost";
$username = "root";
$password = "";
$database = "website_magang";

// koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// cek apakah koneksi ke database berhasil atau gagal
// if ($conn->connect_error) {
// 	die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected to Database successfully";


// registrasi

// cek tombol sudah ditekan atau belum
if(isset($_POST['submit'])) {
  global $conn;
  
  
  
  

  // cek data berhasil ditambahkan ke db atau tidak
  if(mysqli_affected_rows($conn) > 0) {
    echo "<script>alert(registrasi berhasil!)</script>";
  }

};

function registrasi ($data) {
  global $conn;
// ambil data dari form
$user_email = htmlspecialchars($data['user_email']);
$user_password = htmlspecialchars($data['user_password']);

//  query ke database
$query = "INSERT INTO data_user (id,email,password)
VALUES('', '$user_email', '$user_password')";
mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
  return true;
} else {
  return false;
}
}

function login($data) {
  global $conn;
  // Ambil data dari form
  $user_email = htmlspecialchars($data['user_email']);
  $user_password = htmlspecialchars($data['user_password']);

  // Query ke database
  $query = "SELECT * FROM data_user WHERE email = '$user_email' AND password = '$user_password'";
  $result = mysqli_query($conn, $query);

  // Memeriksa keberhasilan login
  if (mysqli_num_rows($result) > 0) {
    // Login berhasil, simpan identifier unik (misalnya ID pengguna) ke dalam session
    $user_data = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['user_id'] = $user_data['id']; // Menyimpan ID pengguna ke dalam session
    return true;
  } else {
    // Login gagal
    return false;
  }
}


function daftarMagang($data) {
  session_start();
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $universitas = htmlspecialchars($data['universitas']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $semester = htmlspecialchars($data['semester']);
  $email = htmlspecialchars($data['email']);
  $alamat = htmlspecialchars($data['alamat']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $periode_mulai = htmlspecialchars($data['periode_mulai']);
  $periode_akhir = htmlspecialchars($data['periode_akhir']);

  // Query untuk memasukkan data mahasiswa ke database
  $query = "INSERT INTO data_mahasiswa (id,nama,universitas,jurusan,semester,email,alamat,no_hp,periode_mulai,periode_akhir,status) 
  VALUES('','$nama','$universitas','$jurusan','$semester','$email','$alamat','$no_hp','$periode_mulai','$periode_akhir',3)";
  mysqli_query($conn,$query);

   // Periksa apakah data berhasil ditambahkan ke database
   if (mysqli_affected_rows($conn) > 0) {
    $_SESSION['inserted_id'] = mysqli_insert_id($conn); // Menyimpan inserted_id ke dalam session
    return true;
  } else {
    return false;
  }

}


// logout

function logout() {
  session_start();
  session_destroy();
  // Redirect ke halaman login atau halaman lain setelah logout
  header("Location: login.php");
  exit();
}


function adminLogin ($data) {

if(isset($_POST['submit'])) {
  $user_email = htmlspecialchars($data['user_email']);
  $user_password = htmlspecialchars($data['user_password']);

  if($user_email === 'admin' && $user_password === 'admin') {
    header('location: dashboard-admin.php');
  } else {
    echo "salah";
  }
}

}

// delete function

function deleteMahasiswa($mahasiswaId) {
  global $conn;

  // Query to delete the mahasiswa record based on the ID
  $query = "DELETE FROM data_mahasiswa WHERE id = '$mahasiswaId'";
  mysqli_query($conn, $query);

  // Check if the record is successfully deleted
  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}
 

function query($query) {
  global $conn;
  $fetch = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($fetch)) {
    $rows[] = $row;
  }
  

  return $rows;
}

function updateStatusMahasiswa($mahasiswaId, $status) {
  global $conn;

  $query = "UPDATE data_mahasiswa SET status = '$status' WHERE id = '$mahasiswaId'";
  mysqli_query($conn, $query);
}









?>

