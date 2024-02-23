<?php
    $param = 4;
    $result = praramXparam($param);
    print_r($result);

    function praramXparam($param1){
        $sementara = [];
        $arrayKelompok = [];
        $hasil=[];


        $kali = $param1 * $param1;
        for ($i=0; $i <$kali ; $i++) { 
            array_push($sementara, $i);
        }
        
        for ($i=0; $i < $param1 ; $i++) { 
            $pisahkan = array_slice($sementara, 0, $param1);
            array_push($arrayKelompok, $pisahkan);
            array_splice($sementara, 0, $param1);
        }

        for ($i= 0; $i < sizeof($arrayKelompok) ; $i++) { 
            if ($i % 2 == 0 ) {
                foreach ($arrayKelompok[$i] as $key) {
                    array_push($hasil, $key);
                }
            }else {
                foreach (array_reverse($arrayKelompok[$i]) as $key) {
                    array_push($hasil, $key);
                }
            }
        }
        return $hasil;
    }
?>