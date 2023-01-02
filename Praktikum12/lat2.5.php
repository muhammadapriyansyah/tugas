<?php 
    class komputer {
        public static $prosessor = "Core i5";
        public static function memutar_video() {
            return "Komputer memutar video";
        }
    }

    echo komputer::$prosessor;
    echo "<br/>";
    echo komputer::memutar_video();
?>