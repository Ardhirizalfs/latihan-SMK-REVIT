<?php

require_once "../function.php";

$sql ="SELECT * FROM tblkategori WHERE idkategori = $id";

$result = mysqli_query($koneksi,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['kategori'];


// $kategori= '';
// id=21;
// $sql ="UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id ";

// $result =mysql_query($koneksi, $sql);



?>

<form action="" method ="post">

kategori :
<input type="text" name="kategori" value="<?php echo $row ['kategori'] ?>">
<br>
<input type="submit" name="simpan" value="simpan">


</form>

<?php 

if (isset($_POST['simpan'])) {
    $kategori = $_POST ['kategori'];
    $sql = "UPDATE tblkategori SET kategori ='$kategori' WHERE idkategori =$id";
    $result = mysqli_query($koneksi, $sql);

    header ("location:http://localhost/phpsmk/restoran/kategori/select.php");
}


?>