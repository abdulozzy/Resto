<?php
require 'init.php';
require 'index.php';
    $id=$_GET['id'];
    $k=$karyawan->getdataSingle($id);

if($_POST){

$karyawan->data=[$_POST['id'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jenis_kelamin']];
$karyawan->update();
if($_POST>0){
    echo"<script>
    alert('Data Berhasil Diubah!');
    document.location.href='datakaryawan.php';
    </script>";
}else{
    echo"Gagal Ubah Data";
}
}
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Ubah Data Karyawan</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datakaryawan.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$k["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>id</td>
            <td><input type="text" name="id" id="id" required="" value="<?= $k["id"];?>"></td>
            </tr>
            <tr>
            <td>Nama_Karyawan</td>
            <td><input type="text" name="Nama_Karyawan" id="Nama_Karyawan"  required="" value="<?= $k["Nama_Karyawan"];?>"></td>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" id="Alamat"  required="" value="<?= $k["Alamat"];?>"></td>
            </tr>
            <tr>
            <td>Jenis_Kelamin</td>
            <td><input type="text" name="Jenis_kelamin" id="Jenis_kelamin"  required="" value="<?=$k["Jenis_kelamin"];?>"></td>
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