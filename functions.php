<?php
// tampung nama server, username db dan password db ke sebuah variabel
$servername = "localhost";
$username = "root";
$password = "";
$database = "website_magang";

// koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// cek apakah koneksi ke database berhasil atau gagal
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected to Database successfully";


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

return mysqli_affected_rows($conn);
}


function adminLogin ($data) {
global $conn;

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
 

function query($query) {
  global $conn;
  $fetch = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($fetch)) {
    $rows[] = $row;
  }
  

  return $rows;
}









?>

