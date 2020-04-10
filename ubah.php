<?php
	$conn = include("config.php");
	include("prosesubah.php");
	
    if( isset($_GET['id']) ){
		$id = $_GET['id'];
		$result = pg_query("SELECT * FROM calonsiswa WHERE id = $id");
		$siswa = pg_fetch_array($result);
	}

	if($siswa["jenis_kelamin"] == "laki-laki"){
		$lk = true;
		$pr = false; 
	}else{
		$lk = false;
		$pr = true;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa Baru | SMK Coding</title>
</head>
<style>
</style>
<body>
	<header>
		<h3>Edit Data Siswa Baru</h3>
	</header>
	<button style="margin-bottom: 40px;"><a href="daftarsiswa.php">KEMBALI</a></button>
	<form action="" method="POST">
		<fieldset>
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?= $siswa["nama"]; ?>">
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?= $siswa["alamat"]; ?></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($lk) { echo "checked" ; }?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($pr) { echo "checked" ; }?>> Perempuan</label>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?= $siswa["sekolah_asal"]; ?>"/>
		</p>
		<p>
			<input type="submit" value="UBAH" name="update" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
