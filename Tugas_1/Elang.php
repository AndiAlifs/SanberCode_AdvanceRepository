<?php
    Class Elang{
        use Hewan, Fight;
        
        function __construct($nama){
            $this -> nama = $nama;
            $this -> jumlahKaki = 2;
            $this -> keahlian = "terbang tinggi";
            $this -> attackPower = 10;
            $this -> deffencePower = 5;
        }

        public function getInfoHewan(){
            echo "Nama : {$this->nama}<br>";
            echo "Darah : {$this->darah}<br>";            
            echo "Jumlah Kaki : {$this->jumlahKaki}<br>";
            echo "Keahlian : {$this->keahlian}<br>";
            echo "Attack Power : {$this->attackPower}<br>";
            echo "Deffence Power : {$this->deffencePower}<br>";
            echo "Jenis Hewan : Elang<br>";
        }
    }
?>