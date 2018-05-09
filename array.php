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

	echo "<h1>JUDUL</h1>";
	echo $prodi[0]["nama"];
	echo "<br>";
	echo $prodi[1]["nama"];
	echo "<br>";
	echo $prodi[2]["nama"];
	echo "<br>";
	echo $prodi[3]["nama"];
	echo "<br>";
	echo $prodi[4]["nama"];
	echo "<br>";
	echo $prodi[5]["nama"];
	echo "<br>";
	echo $prodi[6]["nama"];

	echo "<br>";
	echo "<br>";

	echo "<pre>";
	var_dump($prodi);
	echo"</pre>";
?>