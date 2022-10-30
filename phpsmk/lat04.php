<?php 

// operator matematika

$a=2;
$b=2;

$c =$a+$b;

echo $c.'<br>';

$c=$a-$b;
echo $c.'<br>';

$c=$a*$b;
echo $c.'<br>';

$c=$a/$b;
echo floor($c).'<br>';

$c=$a%$b;
echo $c.'<br>';

// Operator Logika

$c=$a<$b;
echo $c;

$c=$a>$b;
echo $c;

$c = $a == $b;
echo $c;

$c = $a != $b;
echo $c.'<br>';


// INCREMENT
$a++;
echo $a.'<br>';

//Operator String

$kata='Sura';
$kota='Baya';

$hasil = $kata.$kota;

$hasil .=' Kota Pahlawan';
echo $hasil;
?>