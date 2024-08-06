<?php

    require_once 'init.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $menu->data=[$_POST['id'],$_POST['Nama_Menu'],$_POST['Harga'],$_POST['Stok']];
            $menu->save();

            header('Location: datamenu.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data Menu</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datamenu.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <table border="0" class="mx-auto">
        <tr>
            <tr>
            <td>ID</td>
            <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
            <td>Nama Menu</td>
            <td><input type="text" name="Nama_Menu" id="Nama_Menu"></td>
            <tr>
            <td>Harga</td>
            <td><input type="text" name="Harga" id="Harga"></td>
            </tr>
            <tr>
            <td>Stok</td>
            <td><input type="text" name="Stok" id="Stok"></td>
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