<?php
require 'init.php';
require 'index.php';
    $id=$_GET['id'];
    $dt=$detail->getdataSingle($id);

if($_POST){

$detail->data=[$_POST['id'],$_POST['id_transaksi'],$_POST['id_menu'],$_POST['id_karyawan']];
$detail->update();
if($_POST>0){
    echo"<script>
    alert('Data Berhasil Diubah!');
    document.location.href='detailtransaksi.php';
    </script>";
}else{
    echo"Gagal Ubah Data";
}
}
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Ubah Detail Transaksi</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="detailtransaksi.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$dt["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>id</td>
            <td><input type="text" name="id" id="id" required="" value="<?= $dt["id"];?>"></td>
            </tr>
            <tr>
            <td>id_transaksi</td>
            <td><input type="text" name="id_transaksi" id="id_transaksi" required="" value="<?= $dt["id_transaksi"];?>"></td>
            </tr>
            <tr>
            <td>ID Menu</td>
            <td><input type="text" name="id_menu" id="id_menu"  required="" value="<?= $dt["id_menu"];?>"></td>
            <tr>
            <td>ID_Karyawan</td>
            <td><input type="text" name="id_karyawan" id="id_karyawan"  required="" value="<?= $dt["id_karyawan"];?>"></td>
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