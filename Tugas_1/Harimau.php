<?php

    Class Harimau{
        use Hewan, Fight;
        
        function __construct($nama){
            $this -> nama = $nama;
            $this -> jumlahKaki = 4;
            $this -> keahlian = "lari cepat";
            $this -> attackPower = 7;
            $this -> deffencePower =  8;
        }

        public function getInfoHewan(){
            echo "Nama : {$this->nama}<br>";
            echo "Darah : {$this->darah}<br>";            
            echo "Jumlah Kaki : {$this->jumlahKaki}<br>";
            echo "Keahlian : {$this->keahlian}<br>";
            echo "Attack Power : {$this->attackPower}<br>";
            echo "Deffence Power : {$this->deffencePower}<br>";
            echo "Jenis Hewan : Harimau<br>";
        }
    }
?>