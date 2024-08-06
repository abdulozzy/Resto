<?php
require 'init.php';
    $id=$_GET['id'];
    $trn->delete($id);
if($trn){
    header('Location: datatransaksi.php');
    }else{
        die("Gagal Menghapus...");
    }
   
?>