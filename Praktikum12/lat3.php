<?php
    class komputer {
        public static $prosesor = "Core i5";
        public function get_prosesor_1(){
            return komputer::$prosesor;
        }
        public function get_prosesor_2(){
            return self::$prosesor;
        }
        public function get_prosesor_3(){
            return static::$prosesor;
        }
    }

    $komputer_budi = new komputer();
    echo $komputer_budi ->get_prosesor_1();
    echo "<br/>";
    echo $komputer_budi ->get_prosesor_2();
    echo "<br/>";
    echo $komputer_budi ->get_prosesor_3();
?>