<?php

class mobil {
    public $warna;
    public $kecepatan;
    public function jalan(){
        echo "mobil lagi ngedrift";
    }
}
$mobil1 = new mobil();
$mobil1 ->warna = "hitam";
$mobil1 ->kecepatan = "1000";

$mobil-> jalan();