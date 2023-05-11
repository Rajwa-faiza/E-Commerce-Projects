<?php
require_once '../config/koneksi.php';
?>

<?php
// Mendapatkan nilai id dari parameter GET
$_id = $_GET['id'];

// Membuat query SQL untuk mengambil data produk dengan id tertentu
$sql = "SELECT * FROM motor WHERE id=?";
$st = $dbh->prepare($sql);

// Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
$st->execute([$_id]);

// Mengambil hasil query dan menyimpannya ke dalam variabel $row
$row = $st->fetch();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<div class="container m-5">
    <!-- Menampilkan data produk dalam bentuk tabel -->
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?= $row['id'] ?></td>
            </tr>
            <tr>
                <td>Nama Motor</td>
                <td><?= $row['nama_motor'] ?></td>
            </tr>
            <tr>
                <td>Kecepatan Motor</td>
                <td><?= $row['cc'] ?></td>
            </tr>
            <tr>
                <td>Harga Motor</td>
                <td><?= $row['harga'] ?></td>
            </tr>
            <tr>
                <td>Merk Motor</td>
                <td>
                    <?php
                    $sqljenis = "SELECT * FROM merk WHERE id = " . $row['merk_id'];
                    $rsjenis = $dbh->query($sqljenis);
                    $rowjenis = $rsjenis->fetch();
                    echo $rowjenis['merk'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Stok Tersedia</td>
                <td><?= $row['stok'] ?></td>
            </tr>
        </tbody>
    </table>
</div>