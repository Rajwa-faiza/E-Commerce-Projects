<?php
require_once 'koneksi.php';
?>
<?php
$_nama = $_POST['nama_pelanggan'];
$_alamat = $_POST['alamat_pelanggan'];
$_motor = $_POST['motor_id'];
$_stok = $_POST['quantity'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_nama; // ? 1
$ar_data[] = $_alamat; // 3
$ar_data[] = $_motor;
$ar_data[] = $_stok;

if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO pesanan (nama_pelanggan,alamat_pelanggan,motor_id,quantity) VALUES (?,?,?,?)";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $is_success = $st->execute($ar_data);

    // jika sql berhasil dijalankan
    if ($is_success) {
        header('location:../shop.php');
    }
}

echo "Proses Gagal!";
header('location:../shop.php');
?>