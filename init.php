<?php require 'database.php';

$menu=new database();
$menu->table='tb_menu';
$menu->field=['id','Nama_Menu','Harga','Stok'];

$karyawan=new database();
$karyawan->table='tb_karyawan';
$karyawan->field=['id','Nama_Karyaan','Alamat','Jenis_Kelamin'];

$transaksi=new database();
$transaksi->table='tb_transaksi';
$transaksi->field=['id','id_transaksi','Nama_Karyawan','id_karyawan','Tgl_transaksi'];

$detail=new database();
$detail->table='tb_detail_transaksi';
$detail->field=['id_transaksi','id_menu','id_karyawan'];
?>