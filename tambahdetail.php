<?php
    require_once 'init.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
          $detail->data=['',$_POST['id_transaksi'],$_POST['id_menu'],$_POST['id_karyawan']];
          $detail->table='tb_detail_transaksi';
          $detail->save();
            header('Location: detailtransaksi.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>

<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Detail Transaksi</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="detailtransaksi.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <table border="0" class="mx-auto">
        <tr>
            </tr>
            <tr>
            <td>ID Transaksi</td>
            <td><input type="text" name="id_transaksi" id="id_transaksi"></td>
            <tr>
            <td>ID Menu</td>
            <td><input type="text" name="id_menu" id="id_menu"></td>
            </tr>
            <tr>
            <td>ID Karyawan</td>
            <td><input type="text" name="id_karyawan" id="id_karyawan"></td>
            </tr>
            <tr>
                <td class="text-center"><button type="submit">Simpan</td>
            </tr>
        </tr>
    </table>
    </form>
    </div>
    </div>
    </section>
    </div>
