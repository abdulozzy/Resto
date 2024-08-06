<?php
    require_once 'init.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $karyawan->data=[$_POST['id'],$_POST['Nama_Karyawan'],$_POST['Alamat'],$_POST['Jenis_kelamin']];
            $karyawan->table='tb_karyawan';
            $karyawan->save();
            header('Location: datakaryawan.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>

<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data Karyawan</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datakaryawan.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <table border="0" class="mx-auto">
        <tr>
            <tr>
            <td>id</td>
            <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
            <td>Nama_Karyawan</td>
            <td><input type="text" name="Nama_Karyawan" id="Nama_Karyawan"></td>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" id="Alamat"></td>
            </tr>
            <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="Jenis_kelamin" id="Jenis_kelamin"></td>
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
