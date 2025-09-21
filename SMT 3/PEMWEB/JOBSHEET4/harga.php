<?php
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}

$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "<h3>Perhitungan Diskon</h3>";
echo "Harga Awal: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaSetelahDiskon, 0, ',',
'.');
?>
