<?php 

//array dimensi

// $nama = array("joni", "tejo", "budi", "siti",100,2.5);

// var_dump($nama);
// echo "<br>";

// echo $nama[5];
// echo "<br>";

// for ($i=0; $i < ; $i++) { 
//     echo $i;
//     echo $nama[$i];
// }

// foreach ($nama as $k) {
//     echo $k.'<br>';
// }


//array asosiatif

// $nama = array(
//     "joni" => "Surabaya",
//     "Budi" => "Malang",
//     "tejo" => "Jakarta",
//     "siti" => "Sidoarjo"
// );

$nama["joni"]="Surabaya";
$nama["budi"]="Malang Raya";
$nama["tejo"]="Jakarta";
$nama["siti"]="Sidoarjo";

var_dump($nama);

echo "<br>";

// echo $nama['budi'];

foreach ($nama as $k => $v) {
    echo $k."=>".$v;

    echo "<br>";
}

?>