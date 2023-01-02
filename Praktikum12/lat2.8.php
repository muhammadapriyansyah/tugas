<?php
    class angka {
        function cek_angka($angka) {
            if($angka > 10) {
                return TRUE;
            } else {
                return FALSE;
            } 
        }
    }
    
    $a = new angka();
    
    if ($a->cek_angka(11)) {
        echo " Angka Lebih Dari 10";
    } else {
        echo " Angka Kurang Dari 10";
    }

?>