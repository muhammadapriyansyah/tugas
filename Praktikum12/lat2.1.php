<?php 
    class komputer {
        var $prosessor = "Core i7";
        private $memory = "4 GB";

        function get_data(){
            return $this->prosessor." - ".$this->memory;
        }
    }

    $komputer_budi = new komputer();
    echo $komputer_budi->get_data();
 ?>