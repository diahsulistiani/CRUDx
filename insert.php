<?php
include('connection.php');

$no_pasien=$_POST['no_pasien'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$umur=$_POST['umur'];
$keluhan=$_POST['keluhan'];
$no_hp=$_POST['no_hp'];

$insert=mysqli_query($koneksi,"INSERT INTO tblpasien (no_pasien, nama, alamat,jenis_kelamin,umur,keluhan,no_hp) VALUES ('$no_pasien','$nama','$alamat','$jenis_kelamin','$umur','$keluhan','$no_hp')");
if ($insert){
    header('location:list.php');}  
else{
    echo 'input data gagal';}
?>
