<?php
include ('crud.php');


//tamu
$id_tamu =	$_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];
$hasil = tambahTamu($id_tamu,$nama_tamu,$alamat,$kontak);
if($hasil > 0)
    header("Location: tamu.php");
else {
    header("Location: gagaltambah.php");
}
?>