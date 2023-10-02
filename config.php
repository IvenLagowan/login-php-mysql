<?php


$koneksi = mysqli_connect("localhost", "root",  "", "tes");



 if (mysqli_connect_errno()){
echo "Gagal koneksi ke database";
} else {
  echo "Berhasi koneksi";
 }
?>