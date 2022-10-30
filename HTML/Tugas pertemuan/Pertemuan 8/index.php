<?php
	require_once "content.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 2</title>
</head>
<body>
	<div>
		<div>
			<ul>
				<li><a href="index.php"><?= $menu[0] ?></a></li>
				<li><a href="#"><?= $menu[1] ?></a></li>
				<li><a href="#"><?= $menu[2] ?></a></li>
				<li><a href="#"><?= $menu[3] ?></a></li>
			</ul>
		</div>

		<div>
			<ol>
				<li><a href="?isi=0"><?= $judul[0] ?></a></li>
				<li><a href="?isi=1"><?= $judul[1] ?></a></li>
				<li><a href="?isi=2"><?= $judul[2] ?></a></li>
				<li><a href="?isi=3"><?= $judul[3] ?></a></li>
			</ol>
		</div>

		<div>
			<?php 
				
				if( isset($_GET["isi"]) )
				{

					$isi=$_GET["isi"];
                           	echo $deskripsi[$_GET["isi"]];		
				}
				else
				{
					echo "Silahkan pilih buahnya!";
				}

			?>
		</div>
	</div>
</body>
</html>


<!-- 
for($i = 0; $i < count($menu); ++$i)
{
	echo "<li>", $menu[$i], "</li";
} 
-->

<!-- memisahkan php dan html
require_once -->

