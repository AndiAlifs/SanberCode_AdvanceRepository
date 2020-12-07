<?php
    trait Fight{
        public $attackPower;
        public $deffencePower;

        public function serang($attack){
            echo "{$this->nama} sedang menyerang {$attack->nama} <br>";
            $attack->diserang($this);
        }

        public function diserang($attacked){
            echo "{$this->nama} sedang diserang <br>";
            $this->darah = $this->darah - ($attacked->attackPower / $this->deffencePower);
        }
    }
?>