<?php
require 'init.php';
require 'index.php';
    $id=$_GET['id'];
    $t=$trn->getdataSingle($id);

if($_POST){

$trn->data=[$_POST['id_transaksi'],$_POST['Nama_Karyawan'],$_POST['id_karyawan'],$_POST['Tgl_transaksi']];
$trn->update();
if($_POST>0){
    echo"<script>
    alert('Data Berhasil Diubah!');
    document.location.href='datatransaksi.php';
    </script>";
}else{
    echo"Gagal Ubah Data";
}
}
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Ubah Data Transaksi</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datatransaki.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$t["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>id_transaksi</td>
            <td><input type="text" name="id_transaksi" id_transaksi="id_transaksi" required="" value="<?= $t["id_transaksi"];?>"></td>
            </tr>
            <tr>
            <td>Nama_Karyawan</td>
            <td><input type="text" name="Nama_Karyawan" id="Nama_Karyawan"  required="" value="<?= $t["Nama_Karyawan"];?>"></td>
            <tr>
            <td>id_karyawant</td>
            <td><input type="text" name="id_karyawant" id="id_karyawant"  required="" value="<?= $t["id_karyawant"];?>"></td>
            </tr>
            <tr>
            <td>Tgl_transaksi</td>
            <td><input type="text" name="Tgl_transaksi" id="Tgl_transaksi"  required="" value="<?=$t["Tgl_transaksi"];?>"></td>
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