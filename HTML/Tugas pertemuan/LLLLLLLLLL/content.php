<?php 

	$menu = ["Home", "Kontak", "Sejarah", "Jurusan"];
	$judul = ["Apel", "Jeruk", "Mangga", "Durian"];
	$deskripsi = [
		"Apel adalah...",
		"Jeruk adalah..",
		"Mangga adalah...",
		"Durian adalah buah yang mantap ..."
	];
    

	for ($i=0; $i <4; $i++) { 
		echo"<li>$menu[$i] </li>";
	}
   $link=[
             "home" => "<a href='#'>home</a>",
			 "kontak" => "<a href='#'>kontak</a>",  
			 "sejarah" => "<a href='#'>sejarah</a>",  
			 "jurusan" => "<a href='#'>jurusan</a>"
		];

		echo $link["home"];

		foreach ($link as $key => $value) {
			echo "<li>";
			echo $value;
			echo "</li>";
		}
		
		$tanggal= 31;

		if ($tanggal >= 1 && $tanggal <=31) {
			echo "benar";
		}
		else {
			echo "salah";
		}

		echo "<br>";
		echo "<br>";
		echo "<br>";

		// $nilai = 69;

		// if ($nilai >100) {
		// 	echo "nilai salah";
		// }

		// elseif ($nilai <0) {
		// 	echo "nilai salah karena minus";
		// }
		
		// elseif ($nilai >=70) {
		// 	echo "Anda Lulus";
		// }

		// elseif ($nilai <70) {

		// echo "anda tidak lulus";
		// }

		$nilai= 70;
		if ($nilai >=0 && $nilai <=100) {
			if ($nilai >70) {
				if ($nilai == 71) {
				echo "kkm";
				}
				if ($nilai >71 && $nilai <80) {
					echo "Nilai anda C";
				}
				if ($nilai >=80 && $nilai <90) {
					echo "Nilai anda B";
				}
				if ($nilai >=90 && $nilai <=100) {
					echo "Nilai anda A";
				}
			}
			else {
				echo "anda tidak lulus";
			}
		}
else {
	echo "Nilai salah";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




function zodiak($t,$b)
{
	$tanggal =$t;
$bulan =$b;

if ($tanggal >0 && $tanggal <32 && $bulan >0 && $bulan <13) {
	if ($bulan == 1 ) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda capricorn";
		}
		else {
			echo "zodiak anda aquarius";
		}
	}
	if ($bulan == 2) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda aquarius";
		}
		else {
			echo "zodiak anda pisces";
		}
		
	}
	if ($bulan == 3) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda pisces";
		}
		else {
			echo "zodiak anda aries";
		}
		
	}
	if ($bulan == 4) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda aries";
		}
		else {
			echo "zodiak anda taurus";
		}
		
	}
	if ($bulan == 5) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda taurus";
		}
		else {
			echo "zodiak anda gemini";
		}
		
	}
	if ($bulan == 6) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda gemini";
		}
		else {
			echo "zodiak anda cancer";
		}
		
	}
	if ($bulan == 7) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda cancer";
		}
		else {
			echo "zodiak anda leo";
		}
		
	}
	if ($bulan == 8) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda leo";
		}
		else {
			echo "zodiak anda virgo";
		}
		
	}
	if ($bulan == 9) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda virgo";
		}
		else {
			echo "zodiak anda libra";
		}
		
	}
	if ($bulan == 10) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda libra";
		}
		else {
			echo "zodiak anda scorpio";
		}
		
	}
	if ($bulan == 11) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda scorpio";
		}
		else {
			echo "zodiak anda sagitarius";
		}
		
	}
	if ($bulan == 12) {
		if ($tanggal >=1 && $tanggal <=20) {
			echo "zodiak anda sagitarius";
		}
		else {
			echo "zodiak anda capricorn";
		}
		
	}
	
}
else{

	echo "Tanggal atau Bulan salah";
}
}

echo "<br>";
echo "<br>";

zodiak(1,1);
echo "<br>";

for ($i=1; $i<13 ; $i++) {
	zodiak(25,$i);
	echo "<br>";
}

 ?>