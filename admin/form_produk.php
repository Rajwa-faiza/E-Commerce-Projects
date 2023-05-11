<?php
require_once '../config/koneksi.php';
?>

<?php
// cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
$_id = isset($_GET['id']) ? $_GET['id'] : null;
if (!empty($_id)) {
    // ambil data motor berdasarkan id
    $sql = "SELECT * FROM motor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
} else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<div class="container m-5">
    <form method="POST" action="proses_produk.php">
        <div class="form-group row mt-3">
            <label for="nama_motor" class="col-4 col-form-label">Nama Motor</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="nama_motor" name="nama_motor" type="text" class="form-control"
                        value="<?php if (isset($row['nama_motor'])) echo $row['nama_motor']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="cc" class="col-4 col-form-label">Kecepatan Motor</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="cc" name="cc" type="text" class="form-control"
                        value="<?php if (isset($row['cc'])) echo $row['cc']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="jenis" class="col-4 col-form-label">Merk Motor</label>
            <div class="col-8">
                <?php
                $sqljenis = "SELECT * FROM merk";
                $rsjenis = $dbh->query($sqljenis);
                ?>
                <select id="merk_id" name="merk_id" class="custom-select">
                    <?php
                    foreach ($rsjenis as $rowjenis) {
                    ?>
                    <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['merk'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="stok" class="col-4 col-form-label">Stok Tersedia</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="stok" name="stok" value="<?php if (isset($row['stok'])) echo $row['stok']; ?>"
                        type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="harga" class="col-4 col-form-label">Harga</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="harga" name="harga" value="<?php if (isset($row['harga'])) echo $row['harga']; ?>"
                        type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <div class="offset-4 col-8">
                <?php
                $button = (empty($_id)) ? "Simpan" : "Update";
                ?>
                <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                <input type="hidden" name="id" value="<?= $_id ?>" />
            </div>
        </div>
    </form>
</div>