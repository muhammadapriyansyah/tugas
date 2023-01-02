<?php
    class House {
        public $primaryColor = 'black';
        public function changeColor ($color) {
            $this -> primaryColor = $color;
        }
    }

    $myHouse = new House();
    echo $myHouse -> primaryColor;

    $myHouse -> changeColor('white');

    echo $myHouse -> primaryColor;
    
?>