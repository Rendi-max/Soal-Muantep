<?php
    $routes = array([1, 2, 7],[3, 6, 7], [2, 4, 5]);
    $source = 1;
    $target = 3;   
    $pergantian = pergantian($source, $target, $routes);
    
    function pergantian($from, $to, $route){
        $jumlah = 0;
        $slice = [];
        for ($i=0; $i < sizeof($route) ; $i++) { 
            if (in_array($from, $route[$i])) {
                $jumlah = 1;                
                if (in_array($to, $route[$i])) {
                    $jumlah = "Kamu cuman berganti terminal 1 kali untuk mencapai tujuan :D";
                }else{
                    array_push($slice, $route[$i]);
                    array_splice($route, $i, 1);
                    for ($j=0; $j < sizeof($slice) ; $j++) { 
                        foreach ($slice[$j] as $key) {
                            if (in_array($key, $route[$j])) {
                                if (in_array($to, $route[$j])) {
                                    $jumlah += 1;
                                }
                            }
                        }
                    }
                }
            }
        }
        return $jumlah;
    }
    print_r($pergantian);
?>