<?php
Function koneksiHotel(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";

    // menciptakankoneksi
    $koneksi = mysqli_connect($servername, $username, $password,
    $dbname);

    // Cekkoneksi
    if (!$koneksi) {
                die("Koneksigagal: " . mysqli_connect_error());
    }
    return $koneksi;
}