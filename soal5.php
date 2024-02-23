<?php
    
    $angka =  [10,9,2,5,3,7,101,18];
    $result = longestIncrement($angka);
    function longestIncrement($angka){
        $maxIncrement = 0;
        for ($i = 1; $i < sizeof($angka); $i++) {
            if ($angka[$i] > $angka[$i - 1]) {
                $maxIncrement++;
            }
        }
    
        return $maxIncrement;
    }
    print_r($result);
?>