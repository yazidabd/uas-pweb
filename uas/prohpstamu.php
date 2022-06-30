<?php
    include('crud.php');

    $id = $_GET['id_tamu'];

    $hasil = hapusTamu($id);

    if($hasil > 0){
        header("Location: hpstsmu.php");
    }else{
        echo'Gagal menghapus data';
    }
?>