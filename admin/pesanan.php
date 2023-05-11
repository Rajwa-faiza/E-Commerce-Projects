<?php
include_once 'template/header.php';
include_once 'template/navbar.php';

require_once '.././config/koneksi.php';

// select all data from table "pesanan"
$sql = "SELECT * FROM pesanan";
// execute the query
$rs = $dbh->query($sql);


?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Data Pesanan Motor</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Pesanan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Data Pesanan Motor
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat Pelanggan</th>
                            <th>Motor Yang di Pesan</th>
                            <th>QTY</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($rs as $row) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['nama_pelanggan'] ?></td>
                                <td><?= $row['alamat_pelanggan'] ?></td>
                                <td>
                                    <?php
                                    $sqljenis = "SELECT * FROM motor WHERE id = " . $row['motor_id'];
                                    $rsjenis = $dbh->query($sqljenis);
                                    $rowjenis = $rsjenis->fetch();
                                    echo $rowjenis['nama_motor'];
                                    ?>
                                </td>
                                <td><?= $row['quantity'] ?></td>
                                <td>
                                    <a class="btn btn-primary" href="pesanan/view_pesanan.php?id=<?= $row['id'] ?>">View</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'template/footer.php';
?>