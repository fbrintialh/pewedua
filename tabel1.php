<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
</head>

<body>

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
