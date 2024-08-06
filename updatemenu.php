<?php
require 'init.php';
require 'index.php';
    $id=$_GET['id'];
    $datam=$menu->getdataSingle($id);

if($_POST){
$menu->data=[$_POST['id'],$_POST['Nama_Menu'],$_POST['Harga'],$_POST['Stok']];
$menu->update();
if($_POST>0){
    echo"<script>
    alert('Data Berhasil Diubah!');
    document.location.href='datamenu.php';
    </script>";
}else{
    echo"Gagal Ubah Data";
}
}
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Ubah Data Menu</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datamenu.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$datam["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>id</td>
            <td><input type="text" name="id" id="id" required="" value="<?= $datam['id'];?>"></td>
            </tr>
            <tr>
            <td>Nama_Menu</td>
            <td><input type="text" name="Nama_Menu" id="Nama_Menu"  required="" value="<?= $datam["Nama_Menu"];?>"></td>
            <tr>
            <td>Harga</td>
            <td><input type="text" name="Harga" id="Harga"  required="" value="<?= $datam["Harga"];?>"></td>
            </tr>
            <tr>
            <td>Stok</td>
            <td><input type="text" name="Stok" id="Stok"  required="" value="<?= $datam["Stok"];?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</td>
            </tr>
        </tr>
    </table>
    </form>
            </div>
        </div>
</section>
    </div>