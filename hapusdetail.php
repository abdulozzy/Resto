<?php
require 'init.php';
    $id=$_GET['id'];
    $detail->delete($id);
if($detail){
    header('Location: detailransaksi.php');
    }else{
        die("Gagal Menghapus...");
    }
   
?>