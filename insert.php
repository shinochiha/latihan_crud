<?php 
require'koneksi.php';

$nama = htmlspecialchars(ucwords($_POST['nama']));
$email = htmlspecialchars($_POST['email']);
$no_hp = htmlspecialchars($_POST['no_hp']);
$divisi = htmlspecialchars(ucwords($_POST['divisi']));



$sql	= ("INSERT INTO santri SET nama='$nama', email='$email', no_hp='$no_hp', divisi='$divisi'");
$insert = mysqli_query($koneksi,$sql );

if($insert)
	header('Location:list1.php');
else
	 echo "Gagal";
 ?>
