<?php 
require'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM santri");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
$jumlah = mysqli_num_rows($query);


if (empty($results)) {
	echo "<h1>" . "Data Kosong" . "</h1>";
	echo "<p>". "Silahkan isi data di bawah ini!!" . "</p>";
	echo "<a style='background-color:blue;padding:7px;text-decoration:none;color:white;border-radius:5px;' href='index.php'>Tambah Santri [+]</a>";
	exit;
}

 ?>
 <html>
 	<head>
 		<title>List Santri</title>
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 	</head>
 <body>
 	<div class="container">
 	<h1 align="center">Daftar Santri</h1>
 	<div class="table-responsive">
 	<table class="table table-hover table-light border  border-light shadow" align="center" border="1" cellpadding="8">
 		<tr class="bg-primary text-light">
 			<th>No</th>
 			<th>Nama</th>
 			<th>Email</th>
 			<th>No.Hp</th>
 			<th>Divisi</th>
 		</tr>
 	<?php $nomer=1; ?>
 	<?php foreach ($results as $result) : ?>
 		<tr>
 			<th><?= $nomer; ?></th>
 			<td><?= $result['nama']; ?></td>
 			<td><?= $result['email']; ?></td>
 			<td><?= $result['no_hp']; ?></td>
 			<td><?= $result['divisi']; ?></td>
 		</tr>
 	<?php $nomer++; ?>
 	<?php endforeach; ?>
 	</table>
 	<p align="center">
 		Jumlah Santri : <?= $jumlah; ?>
 	</p>
 	</div>
 	</div>
 </body>
 </html>