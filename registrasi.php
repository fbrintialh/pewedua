<!DOCTYPE html>
<html>
<head>
	<title>Latihan Registrasi</title>
</head>

<body>
<?php 

	$kabupaten=[
				[
					"id"=>1,
					"nama_kab"=>"Pontianak"
				],
				[
					"id"=>2,
					"nama_kab"=>"Kubu Raya"
				],
				[
					"id"=>3,
					"nama_kab"=>"Mempawah"
				],
				[
					"id"=>4,
					"nama_kab"=>"Singkawang"
				]
	]

?>

	<h1>Form Registrasi</h1>
		<table>
			<form method="POST" action="proses.php">
			<tr>
				<td><label>Username</label></td>
				<td>:</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td>:</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td><label>Nama</label></td>
				<td>:</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td><label>No HP</label></td>
				<td>:</td>
				<td>
					<input type="text" name="nohp">
				</td>
			</tr>
			<tr>
				<td><label>Alamat</label></td>
				<td>:</td>
				<td>
					<textarea name="alamat"></textarea>
				</td>
			</tr>
			<tr>
				<td><label for="kabupaten">Kabupaten</label></td>
				<td>:</td>
				<td>
					<select name="kabupaten">
						<?php foreach ($kabupaten as $kab): ?>

						<option value="<?= $kab['id']; ?>" >
							<?= $kab['nama_kab']; ?>
						</option>

						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="jenkel">Jenis Kelamin</label></td>
				<td>:</td>
				<td>
					<input type="radio" name="jenkel" value="1"> Pria
					<input type="radio" name="jenkel" value="2"> Wanita
				</td>
			</tr>
			<tr>
				<td><label for="prodi">Prodi Pilihan</label></td>
				<td>:</td>
				<td>
					<input type="checkbox" name="prodipil_sisfo"> Sistem Informasi <br>
					<input type="checkbox" name="prodipil_siskom"> Sistem Komputer <br>
					<input type="checkbox" name="prodipil_info"> Informatika
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="submit" value="Simpan">
				</td>
			</tr>
			</form>
		</table>

</body>
</html>