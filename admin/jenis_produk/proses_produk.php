<?php
// Include file koneksi database
require_once '../../config/koneksi.php';

// Ambil data dari form
$_merk = $_POST['merk'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[] = $_merk;


// Cek aksi yang dilakukan: Simpan atau Update
if ($_proses == "Simpan") {
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO merk (merk) VALUES (?)";
} else if ($_proses == "Update") {
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[] = $_POST['id'];
    $sql = "UPDATE merk SET merk=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:../jenis_produk.php');
