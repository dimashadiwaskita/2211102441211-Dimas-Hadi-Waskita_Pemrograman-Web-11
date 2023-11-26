<?php

$jumlahUang = 1575250;
$pecahan = [100000, 50000, 20000, 5000, 100, 50];
$jumlah = [0, 0, 0, 0, 0, 0];

for ($i = 0; $i < count($pecahan); $i++) {
    $jumlah[$i] = (int) ($jumlahUang / $pecahan[$i]);
    $jumlahUang %= $pecahan[$i];
}

echo "Jumlah Uang Rp.100.000 : " . $jumlah[0] . " lembar<br />";
echo "Jumlah Uang Rp.50.000 : " . $jumlah[1] . " lembar<br />";
echo "Jumlah Uang Rp.20.000 : " . $jumlah[2] . " lembar<br />";
echo "Jumlah Uang Rp.5.000 : " . $jumlah[3] . " lembar<br />";
echo "Jumlah Uang Rp.100 : " . $jumlah[4] . " lembar<br />";
echo "Jumlah Uang Rp.50 : " . $jumlah[5] . " lembar<br />";

?>
