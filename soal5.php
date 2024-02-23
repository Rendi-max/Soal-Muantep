<?php
    
    $angka =  [10,9,2,5,3,7,101,18];
    $result = longestIncrement($angka);
    function longestIncrement($angka){
        $maxIncrement = 0;
        $currentIncrement = 1;

        for ($i = 1; $i < count($angka); $i++) {
            if ($angka[$i] > $angka[$i - 1]) {
                $currentIncrement++;
            } else {
                $maxIncrement = max($maxIncrement, $currentIncrement);
                $currentIncrement = 1;
            }
        }
    
        return $maxIncrement;
    }
    print_r($result);
?>