<?php
    
   require_once('db.php');

    $sql='SELECT * FROM tblteman';

    echo $sql;

    $hasil=$koneksi -> query($sql);

    echo '<table>';
    echo '<tr> 
    
    <th>idteman</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Asal Sekola</th>
    <th>umur</th>
    </tr>';
   
    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td>'.$row[4].'</td>';
            

            echo '</tr>';

        }
    } else {
        echo" TIDAK ADA DATA";
    }


    echo '</table>';
?>

