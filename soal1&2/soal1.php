<?php
$saldoAwal = 1000000; // Saldo awal nasabah (Rp. 1.000.000)
$bunga = 0.0025; // Bunga per bulan (0,25%)
$bulan = 11; // Jumlah bulan

// Menghitung saldo akhir
$saldoAkhir = $saldoAwal; // Inisialisasi saldo akhir dengan saldo awal

for ($i = 1; $i <= $bulan; $i++) {
    $saldoAkhir += $saldoAkhir * $bunga; // Menghitung saldo akhir setiap bulan
}

echo "Saldo akhir setelah $bulan bulan adalah: Rp. " . number_format($saldoAkhir, 2) . ",-"; // Menampilkan saldo akhir dalam format yang sesuai
?>
