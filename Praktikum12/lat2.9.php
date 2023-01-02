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
    $laptop_budi->set_prosesor ("Core i5");
    $prosesor_laptop_budi = $laptop_budi->get_prosesor();
    echo $prosesor_laptop_budi;
?>