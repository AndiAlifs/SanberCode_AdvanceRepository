<?php
    require "Hewan.php";
    require "Fight.php";
    include "Elang.php";
    include "Harimau.php";

    $elang = new Elang("elang_1");
    $harimau = new Harimau("harimau_1");

    $elang->serang($harimau);
    $harimau -> getInfoHewan();
?>