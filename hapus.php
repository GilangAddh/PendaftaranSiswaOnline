<?php

include('koneksi.php');

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM data_siswa WHERE id_siswa = '$id' ");

echo "<script> alert('Data Ini Berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; URL=datasiswa.php'>";
