<?php
// Include file koneksi database
require_once '../config/koneksi.php';

// Ambil data dari form
$_nama_motor = $_POST['nama_motor'];
$_cc = $_POST['cc'];
$_merk_id = $_POST['merk_id'];
$_stok = $_POST['stok'];
$_harga = $_POST['harga'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[] = $_nama_motor;
$ar_data[] = $_cc;
$ar_data[] = $_merk_id;
$ar_data[] = $_stok;
$ar_data[] = $_harga;

// Cek aksi yang dilakukan: Simpan atau Update
if ($_proses == "Simpan") {
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO motor (nama_motor,cc,merk_id,stok,harga) VALUES (?,?,?,?,?)";
} else if ($_proses == "Update") {
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[] = $_POST['id'];
    $sql = "UPDATE motor SET nama_motor=?,cc=?,merk_id=?,stok=?,harga=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:index.php');
