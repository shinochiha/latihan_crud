<html>
	<head>
		<title>Belajar Membuat form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
<body>

	<div class="container">
		<h1 align="center">Tambah Data Santri</h1>
		<form action="insert.php" method="post">
			<label for="1">Nama:</label>
			<input class="form form-control shadow" type="text" id="1" name="nama" placeholder="masukkan nama" required>
			<br><br>
			<label for="2">Email:</label>
			<input class="form form-control shadow" type="email" id="2" name="email" placeholder="masukkan email" required>
			<br><br>
			<label for="3">No.Hp:</label>
			<input class="form form-control shadow" type="number" id="3" name="no_hp" required placeholder="masukkan no hp">
			<br><br>
			<label for="4">Divisi:</label>
			<input class="form form-control shadow" type="text" id="4" name="divisi" required placeholder="masukkan divisi">
			<br><br>
			<button class="btn btn-primary shadow" type="submit">Tambah!</button>
			<button class="btn btn-danger shadow" type="reset">Reset!</button>
		</form>
	</div>
</body>
</html>