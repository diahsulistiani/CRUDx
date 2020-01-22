<?php
include('connection.php');

$no_pasien=$_POST['no_pasien'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$umur=$_POST['umur'];
$keluhan=$_POST['keluhan'];

$insert=mysqli_query($connect,"INSERT INTO tblpasien SET no_pasien, nama, alamat,jenis_kelamin,umur,keluhan,no_hp) VALUES '$no_pasien','$nama','$alamat','$jenis_kelamin','$umur','$keluhan');

if ($insert)
    header('location:list.php');    
else
    echo 'input data gagal';

    
