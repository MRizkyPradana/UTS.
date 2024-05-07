<?php
// Ambil data dari form
$nama_negara = $_POST['nama_negara'];
$pertandingan = $_POST['pertandingan'];
$menang = $_POST['menang'];
$seri = $_POST['seri'];
$kalah = $_POST['kalah'];
$poin = $_POST['poin'];
$operator = $_POST['operator'];
$nim = $_POST['nim'];

// Format data yang akan ditambahkan ke file db.html
$new_data = "<tr>
    <td>$nama_negara</td>
    <td>$pertandingan</td>
    <td>$menang</td>
    <td>$seri</td>
    <td>$kalah</td>
    <td>$poin</td>
    <td>$operator</td>
    <td>$nim</td>
</tr>";

// Baca data dari file db.html
$file = 'db.html';
$current_data = file_get_contents($file);

// Tambahkan data baru ke dalam file db.html
$current_data .= $new_data;

// Tulis kembali data ke dalam file db.html
file_put_contents($file, $current_data);

// Redirect kembali ke halaman input
header('Location: index.html');
?>
