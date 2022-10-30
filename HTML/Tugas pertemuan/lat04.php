
    <form action="" method="POST">
     angka 1
     <input type="number" name="angka1">
     
     <br>
     angka 2

     
     <input type="number" name="angka2">
     <br>
     <br>
      operator
      
     <input type="Submit" name="tambah" value="tambah">
      
     <input type="Submit" name="kali" value="kali">
      
     <input type="Submit" name="bagi" value="bagi">

    </form>

<?php 

if (isset($_POST['tambah'])) {
    $angka1=$_POST['angka1'];
    $angka2=$_POST['angka2'];
    
    
    $hasil=$angka1+$angka2;
    echo $hasil;


}
 else
    if (isset($_POST['kali'])) {
        $angka1=$_POST['angka1'];
        $angka2=$_POST['angka2'];
        
        
        $hasil=$angka1 * $angka2;
        echo $hasil;
    
    }
    else
      if (isset($_POST['bagi'])) {
        $angka1=$_POST['angka1'];
        $angka2=$_POST['angka2'];
         
        
        $hasil=$angka1 / $angka2;
        echo $hasil;
     
         }

echo '<br>';  
echo '<br>';
?>


<?php
    


  $a=1;
  for ($i=1;$i<=100;$i++){
    if($i%2==0){
        echo $i;
        
    }
    else
    echo '<br>';
    echo '<br>';
  }


?>
