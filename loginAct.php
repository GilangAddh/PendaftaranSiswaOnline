<?php
include 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM data_siswa 
                        WHERE username_siswa = '$username' AND password = '$password'";

$query_sql2 = "SELECT * FROM data_admin 
                        WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);
$result2 = mysqli_query($koneksi, $query_sql2);

if(mysqli_num_rows($result) > 0){
    echo "<script>alert('Anda Berhasil Login')</script>";
    echo "<h2>Anda Login Sebagai User!</h2>";
}else if(mysqli_num_rows($result2)){
    echo "<script>alert('Admin Berhasil Login')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=datasiswa.php'>";
}else{
      echo "<h2>Username atau Password Salah!</h2>";
}
?>