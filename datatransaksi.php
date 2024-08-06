
<?php
require 'init.php';
require 'index.php';
$data_transaksi=$transaksi->getdata();
if(isset($_POST['Cari'])){
    $data_transaksi= $transaksi->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DAFTAR TRANSAKSI</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahdetail.php">Tambah Transaksi</a>
<form action="" method="post">
    <div class="row">
        <div class="col-4">
        <input type="text" class="form-control" name="keyword" id="keyword"> 
        </div>
        <div class="col-1">
        <input type="submit" class="btn btn-sm btn-success" name="Cari" value="Cari"><br>
        </div>
    </div>

<table class="table table-hover mt-3">
    <tr>
        <th>ID</th>
        <th>ID Karyawan</th>
        <th>Nama Karyawan</th>
        <th>Tgl Transaksi</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($data_transaksi as $row) :?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['id_transaksi']; ?></td>
        <td><?= $row['NamaKaryawan']; ?></td>
        <td><?= $row['id_karyawan']; ?></td>
        <td><?= $row['Tgl_transaksi']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning" href="updatetransaksi.php?id_transaksi=<?=$row["id_transaksi"];?>">ubah</a>

        <a class="btn btn-sm btn-danger" href="hapustransaksi.php?id_transaksi=<?=$row["id_transaksi"];?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>