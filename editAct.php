<?php
include 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = md5($password);
$name = $_POST['name'];
$email = $_POST['email'];

mysqli_query($koneksi, "UPDATE data_siswa set username_siswa = '$username',
											  password = '$password',
											  password_enk = '$password2',
											  nama_siswa = '$name',
											  email_siswa = '$email'
											  WHERE id_siswa = '$id'");

echo "<script> alert('Data Berhasil di Update')</script>";
echo "<meta http-equiv='refresh' content='0; URL=datasiswa.php'>";
