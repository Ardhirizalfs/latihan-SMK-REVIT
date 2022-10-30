<?php 

	$menu = ["Home", "Kontak", "Sejarah", "Jurusan"];
	$judul = ["Apel", "Jeruk", "Mangga", "Durian"];
	$deskripsi = [
		"Apel adalah...",
		"Jeruk adalah..",
		"Mangga adalah...",
		"Durian adalah..."
	];
    

	for ($i=0; $i <5; $i++) { 
		echo 
	}



	$link=[

		"home" => "<a href ='#'>Home </a> "
		"kontak" => "<a href ='#'>Kontak </a> "
		"sejarah" => "<a href ='#'>Sejarah </a> "
		"jurusan" => "<a href ='#'>Jurusan </a> "
	];
	echo $link["home"];

	foreach ($link as $key => $value) {

		echo "<li>"
		echo $value;
		echo "</li>"
	}
   

 ?>