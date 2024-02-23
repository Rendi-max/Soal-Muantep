<?php  
$n = 30;
$bungkus = $n;

while($n >= 5)
{
	$sisa = $n % 5;
    $bulat = $n - $sisa;
    $hasil = $bulat / 5;
    $bungkus += $hasil;
    $n = $hasil;
}
print_r($bungkus);
?>  