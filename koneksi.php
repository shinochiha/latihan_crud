<?php 

$server = 'localhost';
$user	= 'fitradev';
$pass	= 'jakarta123';
$db		= 'pondok';

$koneksi = mysqli_connect($server,$user,$pass,$db);

// $koneksi = mysqli_connect('localhost','fitradev', 'jakarta123', 'pondok');

if(!$koneksi)
	echo "koneksi gagal";


 ?>