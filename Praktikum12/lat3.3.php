<?php
    class siswa {
        private $nama;
        private $umur;

        public function set_nama($nama) {
            $this->nama = $nama;
            return $this;
        }
        
        public function set_umur($umur) {
            $this->umur = $umur;
            return $this;
        }
        
        public function get_bio() {
            return "Nama saya adalah ".$this->nama."Umur ".$this->umur;
        }
    }
    
    $budi = new siswa();
    echo $budi->set_nama ('Budi Santoso')->set_umur ('17')->get_bio();

?>