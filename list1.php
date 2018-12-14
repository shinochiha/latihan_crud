<?php 
require 'koneksi.php';

$query = mysqli_query($koneksi, 'SELECT * FROM santri');
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
$jumlah = mysqli_num_rows($query);


if (empty($results)) {
	echo "<p>Data anda kosong, silahkan isi dibawah ini.</p>";
	echo "<a href='index.php'> Tambah Data</a>";
	exit;
}

 ?>
 <html>
 	<head>
 		<title>Daftar Santri</title>
 				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 	</head>
 <body>
 	<div class="container">
 		<h1>Daftar Santri</h1>
 	<table class="table table-hover border border-light shadow" border="1" cellpadding="10">
 		<tr class="bg-primary">
 			<th>No</th>
 			<th>Nama</th>
 			<th>Email</th>
 			<th>No.Hp</th>
 			<th>Divisi</th>
 		</tr>
 	<?php $nomer=1; ?>
	<?php foreach ($results as $result) : ?>
 		<tr>
 			<td><?= $nomer; ?></td>
 			<td><?= $result['nama']; ?></td>
 			<td><?= $result['email']; ?></td>
 			<td><?= $result['no_hp']; ?></td>
 			<td><?= $result['divisi']; ?></td>
 		</tr>
 	<?php $nomer++ ?>	
 	<?php endforeach; ?>	
 	</table>
 	<p>Jumlah Santri: <?= $jumlah ?></p>
 	</div>
 </body>
 </html>