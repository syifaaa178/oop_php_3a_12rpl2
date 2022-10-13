<?php
//luas lingkaran
define("phi", 3.14);
$r = 5.5;
$LuasLingkaran = phi*pow($r,2);
print "Luas Lingkaran dengan \n r=5.5m \n Luas=".$LuasLingkaran;
echo "\n======================\n";

//volume tabung
$t = 8;
$VolumeTabung = phi*pow($r,2)*$t;
Print "Volume Tabung dengan \n t=8m \n Volume=".$VolumeTabung;
echo "\n======================\n";

//alas
$s = 12;
$a = $s*$s;
print "alas=".$a;

//tinggi
$m = 10;
$a = 6;
$t = sqrt($m-$a);
print "tinggi=".$t;

//volume limas
$p = 1/3;
$a = 144;
$t = 2;

//volume gabungan
$vl = 96;
$vt = 759.8;
$ll = 0.9;
$v= $vl+$vt-$ll;
print "volume keseluruhan=".$v;