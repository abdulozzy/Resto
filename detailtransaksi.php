<?php
require 'init.php';
require 'index.php';
$data_detail=$detail->getdata();
if(isset($_POST['Cari'])){
    $data_detail= $detail->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DAFTAR DETAIL TRANSAKSI</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahdetail.php">Tambah Detail Transaksi</a>
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
        <th>ID Transaksi</th>
        <th>ID Menu</th>
        <th>ID Karyawan</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($data_detail as $row) :?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['id_transaksi']; ?></td>
        <td><?= $row['id_menu']; ?></td>
        <td><?= $row['id_karyawan']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning" href="updatedetail.php?id=<?=$row["id"];?>">ubah</a>

        <a class="btn btn-sm btn-danger" href="hapusdetail.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>