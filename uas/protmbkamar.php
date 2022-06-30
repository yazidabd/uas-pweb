<?php
include ('crud.php');
///kamar
$kd_kamar =	$_POST['kd_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$kd_pesan = $_POST['kd_pesan'];
$hasil = tambahKamar($kd_kamar,$jenis_kamar,$kd_pesan);
if($hasil > 0)
    header("Location: kamar.php");
else {
    header("Location: gagaltambah.php");
}
?>