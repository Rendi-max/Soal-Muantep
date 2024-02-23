<?php
    $angka = [1, 2, 3, 4, 5, 6, 7];
    $key = 3;
    for ($i = 0; $i < $key ; $i++) { 
        $first = $angka[0];
        array_splice($angka, 0, 1 );
        array_push($angka, $first);
    }
    print_r($angka)
?>