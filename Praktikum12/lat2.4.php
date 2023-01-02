<?php 
    class komputer {
        var $prosessor;
        var $memory;
        function memutar_video(){
            return "Komputer memutar video";
        }

        function memutar_musik(){
            return "Komputer memutar musik";
        }
    }

    class laptop extends komputer {
        var $tipis;
        function cas_battery() {
            return "Laptop Cas Battery";
        }
    }

    $komputer_budi = new komputer();
    $laptop_budi = new laptop();

    $laptop_budi->prosessor = "Core i7";
    echo $laptop_budi->prosessor;
    echo "<br/>";
    echo $laptop_budi->memutar_musik();

    echo "<hr/>";
    $komputer_budi->tipis = "2 Cm";
    echo $komputer_budi->tipis;
    echo "<br/>";
    echo $komputer_budi->cas_battery();
?>