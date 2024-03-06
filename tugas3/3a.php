<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($a) {
    echo "Jari-jari = $a cm <br>";
    echo "Luas lingkaran = " . (3.14 * $a * $a) . " cm² <hr>";

}

hitungLuasLingkaran(10);

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($a) {
    echo "Jari-Jari $a cm <br>";
    echo "Keliling lingkaran = " . (3.14 * ($a + $a)) . " cm <hr>";
}

hitungKelilingLingkaran(20);

?>