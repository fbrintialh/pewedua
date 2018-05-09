<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
</head>

<body>
<?php 
$prodi = [
				[
				 "id" => 0,
				 "nama" => 'Kimia',
				 "kuota" => 12,
				 "kaprodi" => 'Andi'
				],
				[
				 "id" => 1,
				 "nama" => 'Fisika',
				 "kuota" => 14,
				 "kaprodi" => 'Nurhasanah'
				],
				[
				 "id" => 2,
				 "nama" => 'Biologi',
				 "kuota" => 12,
				 "kaprodi" => 'Rizalinda'
				],
				[
				 "id" => 3,
				 "nama" => 'Sisfo',
				 "kuota" => 32,
				 "kaprodi" => 'Ilham'
				],
				[
				 "id" => 4,
				 "nama" => 'Kelautan',
				 "kuota" => 11,
				 "kaprodi" => 'Noura'
				],
				[
				 "id" => 5,
				 "nama" => 'Statistika',
				 "kuota" => 15,
				 "kaprodi" => 'Naomi'
				],
				[
				 "id" => 6,
				 "nama" => 'Matematika',
				 "kuota" => 12,
				 "kaprodi" => 'Mariatul'
				]

			];

?>

<h1>Ini Latihan Table</h1>
<table border="1"; cellpadding="5"; cellspacing="0";>
	<tr>
		<th>ID</th>
		<th>Nama Prodi</th>
		<th>Kuota</th>
		<th>Kaprodi</th>
	</tr>

<?php 
		for ($i=1; $i <= 100; $i++) :
			// $a = $i*3;
?>
	<tr>
		<td><?php echo $i ?></td>
		<td>Sistem Informasi</td>
		<td><?php echo $i*3 ?></td>

<?php if ($i%2) : ?>		
	<td>Ilhamsyah</td>

<?php else : ?>
	<td>Renny</td>

<?php endif; ?>
	</tr>


<?php 
	endfor;
?>
</table>

</body>
</html>
