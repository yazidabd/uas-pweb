<?php
include ('crud.php');
//pesan
$kd_pesan =	$_POST['kd_pesan'];
$tgl_pesan = $_POST['tgl_pesan'];
$id_recep = $_POST['id_recep'];
$id_tamu = $_POST['id_tamu'];
$hasil = tambahPesan($kd_pesan,$tgl_pesan,$id_recep,$id_tamu);
if($hasil > 0)
    header("Location: pesan.php");
else {
    header("Location: gagaltambah.php");
}
?>