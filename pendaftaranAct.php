<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = md5($password);
$name = $_POST['name'];
$email = $_POST['email'];
$nik = $_POST['nik'];

mysqli_query($koneksi, "INSERT INTO data_siswa VALUES ('', '$username', '$password', '$password2', '$name', '$email')");


echo "<script>alert('Data Berhasil ditambah')</script>";
echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
    