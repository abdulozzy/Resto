<?php
    require_once 'init.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $trn->data=[$_POST['id_transaksi'],$_POST['Nama_karyawan'],$_POST['id_karyawan'],$_POST['tgl_transaksi']];
            $trn->table='tb_transaksi';
            $trn->save();
            header('Location: datatransaksi.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>

<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data Transaksi</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datatransaksi.php">Kembali</a>
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
            <td>Nama Karyawan</td>
            <td><input type="text" name="Nama_Karyawan" id="Nama_Karyawan"></td>
            </tr>
            <tr>
            <td>ID Karyawan</td>
            <td><input type="text" name="id_karyawan" id="id_karyawan"></td>
            </tr>
            <td>Tgl Transaksi</td>
            <td><input type="text" name="Tgl_transaksi" id="Tgl_transaksi"></td>
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
