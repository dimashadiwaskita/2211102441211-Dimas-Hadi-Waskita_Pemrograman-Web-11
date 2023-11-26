<?php
$angkaBln = date("n");
$jumlahHari = 0;

switch($angkaBln) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $jumlahHari = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $jumlahHari = 30;
        break;
    case 2:
        $tahun = date("Y");
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
            $jumlahHari = 29; // Tahun kabisat
        } else {
            $jumlahHari = 28; // Bukan tahun kabisat
        }
        break;
}

$namaBln = date("F"); // Mengambil nama bulan dalam format teks

echo "Nama bulan sekarang adalah : " . $namaBln . "<br>";
echo "Jumlah hari dalam bulan ini adalah : " . $jumlahHari;
?>
