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
				<?php
                        	for ($i=0; $i <4; $i++) 
							{                          
								echo"<li> <a href='#'>$menu[$i] </a> </li>";
							}
						   
						
				?>
			
			</ul>
		</div>

		<div>
			<ol>

			<?php
			for ($i=0; $i <4; $i++) { 
								echo"<li> <a href='?isi=$i'>$judul[$i] </a> </li>";
							}
						   
						
			?>
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




