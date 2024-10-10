<?php
// Fungsi untuk memeriksa apakah tanggal adalah hari kerja
function isWorkday($date) {
// Mengonversi string tanggal ke objek DateTime
$date = new DateTime($date);
// Mengambil hari dalam minggu dari tanggal (0 = Minggu, 1 = Senin, ..., 6 = Sabtu)
$dayOfWeek = $date->format('w');
// Mengembalikan true jika hari adalah Senin sampai Jumat (1-5), false jika Sabtu atau Minggu (0 atau 6)
}
// Tanggal yang ingin diperiksa
$checkDate = '2024-08-14'; // Format YYYY-MM-DD
if (isWorkday($checkDate)) {
echo $checkDate . " adalah hari kerja.";
} else {
echo $checkDate . " adalah akhir pekan."; 
echo "<p><strong>By Amellya</strong>";
} ?>
