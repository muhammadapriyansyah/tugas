<?php 
    class komputer  {
        public static $prosessor = "Core i5";
        public function get_prosessor_1() {
            return komputer::$prosessor;
        }
        public function get_prosessor_2() {
            return self::$prosessor;
        }
        public function get_prosessor_3() {
            return static::$prosessor;
        }
    }

    $komputer_budi = new komputer();
    echo $komputer_budi->get_prosessor_1();
    echo "<br/>";
    echo $komputer_budi->get_prosessor_2();
    echo "<br/>";
    echo $komputer_budi->get_prosessor_3();
?>
