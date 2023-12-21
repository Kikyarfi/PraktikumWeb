<?php
// Inisialisasi variabel IPK
$total_nilai = 0;
$jumlah_matakuliah = 0;

// Loop untuk mengakses nilai dari setiap matakuliah
foreach ($_POST as $key => $value) {
    // Pastikan input yang diambil adalah nilai matakuliah
    if (strpos($key, 'nilai_matkul') !== false) {
        // Pastikan nilai yang diambil adalah numerik
        $nilai_matakuliah = is_numeric($value) ? $value / 25 : 0; // jika nilai numerik, konversi ke skala 0-4, jika tidak numerik, gunakan nilai 0
        // Tambahkan nilai ke total
        $total_nilai += $nilai_matakuliah;
        $jumlah_matakuliah++;
    }
}

// Hitung IPK
$ipk = ($jumlah_matakuliah > 0) ? $total_nilai / $jumlah_matakuliah : 0;

// Tentukan status kelulusan
$status_kelulusan = ($ipk >= 2.75) ? "Lulus" : "Tidak Lulus";

// hasil
echo "<h2>Hasil Perhitungan IPK dan Status Kelulusan</h2>";
echo "<p>IPK: $ipk</p>";
echo "<p>Status Kelulusan: $status_kelulusan</p>";

// Tambahkan tombol balik
echo '<a href="javascript:history.go(-1)">Kembali</a>';
?>
