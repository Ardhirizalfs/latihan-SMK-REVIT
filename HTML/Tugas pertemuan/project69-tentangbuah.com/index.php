 

<form action="" method="post">

Buah

<input type="text" name="buah"> <br>

Deskripsi
<input type="text" name="deskripsi"><br>

Harga

<input type="number" name="harga"><br>
<input type="submit" name="simpan" value="Simpan">





</form>







<?php
    
   require_once('db.php');
 
  if (isset($_POST['simpan'])) {
        $buah=$_POST['buah'];
        $deskripsi=$_POST['deskripsi'];
        $harga=$_POST['harga'];

        $sql="INSERT INTO tblbuah (buah,deskripsi,harga) VALUES ('$buah','$deskripsi',$harga)";
        // echo $sql;
        $koneksi->query($sql);
      }



   if (isset($_GET['id'])) {
      $id=$_GET['id'];
      $sql="DELETE FROM tblbuah WHERE idbuah = $id";
    //   echo $sql;
      $koneksi->query($sql);

   }

    $sql='SELECT * FROM tblbuah';

    // echo $sql;

    $hasil=$koneksi -> query($sql);

    // print_r($hasil);

    // echo $hasil->num_rows;
    echo '<table>';
    echo '<tr> 
    
    <th>idbuah</th>
    <th>Buah</th>
    <th>Deskripsi</th>
    <th>Harga</th>
    <th>Gambar</th>
    <th>Hapus</th>
    </tr>';
   
    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td>'.$row[4].'</td>';
            echo '<td><a href="?id='.$row[0].'">Hapus </a></td>';

            echo '</tr>';

        }
    } else {
        echo" KOSONG";
    }


    echo '</table>';
?>


         