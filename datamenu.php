<?php
require 'init.php';
require 'index.php';
$data_menu=$menu->getdata();
if(isset($_POST['Cari'])){
    $data_menu= $menu->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DAFTAR MENU</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahmenu.php">Tambah Menu</a>
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
        <th>id</th>
        <th>Nama_Menu</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($data_menu as $row) :?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['Nama_Menu']; ?></td>
        <td><?= $row['Harga']; ?></td>
        <td><?= $row['Stok']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning" href="updatemenu.php?id=<?=$row["id"];?>">ubah</a>

        <a class="btn btn-sm btn-danger" href="hapusmenu.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>