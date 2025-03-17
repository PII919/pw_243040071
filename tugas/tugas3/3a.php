<?php
function hitungLuasLingkaran($r)
{
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    $luas = pi() * pow($r, 2);
    echo "Luas lingkaran = " . round($luas, 2) . " cm².<br><hr>";
}

function hitungKelilingLingkaran($r)
{
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    $keliling = 2 * pi() * $r;
    echo "Keliling lingkaran = " . round($keliling, 2) . " cm.<br><hr>";
}

//pemanggilan fungsi
hitungLuasLingkaran(10);
hitungKelilingLingkaran(20);
