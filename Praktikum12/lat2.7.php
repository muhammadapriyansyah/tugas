<?php
    class Laptop {
        private $prosesor;
        public function get_prosesor() {
            return $this->prosesor;
        }
        
        public function set_prosesor ($prosesor) {
            $this->prosesor = $prosesor;
        }
    }
    
    $laptop_budi = new Laptop();
    $laptop_budi->set_prosesor("Core 15");
    
    echo $laptop_budi->get_prosesor();


?>