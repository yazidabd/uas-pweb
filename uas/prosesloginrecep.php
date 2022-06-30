<?php
session_start();
include('crudrecep.php');
$username = $_POST['username'];
$password = $_POST['password'];
if(otentik($username, $password)){
    // Set variabel sesi
    $_SESSION['username'] = $username;
    $dataUser = array(); // deklarasi var array
    $dataUser = cariUserDariId($username); // mencari user(nama)
    $_SESSION['namauser'] = $dataUser['nama'];
// file hapusmhs.php sudah dibuat di pertemuan sebelumnya
header("Location: sisinfo.php");
}else{
header("Location: login.php?error");
}
?>