<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_register');

// get the post records
$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];


// database insert SQL code
$sql = "INSERT INTO `tbl_user` (`Id`,`txtEmail`, `txtPassword`) VALUES ('0', '$txtEmail', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registrasi Berhasil";
}

?>