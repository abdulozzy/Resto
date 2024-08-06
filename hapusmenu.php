<?php
require 'init.php';
    $id=$_GET['id'];
    $menu->delete($id);
if($menu){
    header('Location: datamenu.php');
    }else{
        die("Gagal Menghapus...");
    }
   
?>