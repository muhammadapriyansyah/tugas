<?php 
    class komputer {
        public $prosessor = "Core i7";
        public $memory = "4 GB";
        public function memutar_video() {
            return "Komputer memutar video";
        }
    }

    $komputer_budi = new komputer();
    echo $komputer_budi->prosessor;
    echo "<br/>";
    echo $komputer_budi->memory;
    echo "<br/>";
    echo $komputer_budi->memutar_video();
?>