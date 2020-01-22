<?php
include ('connection.php');

$no_pasien=$_POST['no_pasien'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$umur=$_POST['umur'];
$keluhan=$_POST['keluhan'];
$no_hp=$_POST['no_hp'];

$update = mysqli_query($koneksi,"UPDATE tblpasien SET no_pasien='$no_pasien',nama='$nama',alamat='$alamat', jenis_kelamin='$jenis_kelamin',umur='$umur',keluhan='$keluhan', no_hp='$no_hp'where no_pasien='$no_pasien'");

if($update)
    header('Location:list.php');
    else
    echo 'update'
?>