<?php

//kamar
 require_once 'koneksihotel.php';
Function bacaKamar($sql){
    $data = array();
    $koneksi = koneksiHotel();
    $hasil = mysqli_query($koneksi, $sql);
    // jika tidak ada record, hasil berupa null
    if (mysqli_num_rows($hasil) == 0) {
            mysqli_close($koneksi);
            return null;
    }
    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)){
        $data[$i]['kode']= $baris['kd_kamar'];
        $data[$i]['tipe'] = $baris['jenis_kamar'];
        $data[$i]['kd_pesan'] = $baris['kd_pesan'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
Function bacasemuaKamar(){
    return bacaKamar("select * from kamar");
}


//pesan
Function bacaPesan($sql){
    $data = array();
    $koneksi = koneksiHotel();
    $hasil = mysqli_query($koneksi, $sql);
    // jika tidak ada record, hasil berupa null
    if (mysqli_num_rows($hasil) == 0) {
            mysqli_close($koneksi);
            return null;
    }
    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)){
        $data[$i]['kode']= $baris['kd_pesan'];
        $data[$i]['tanggal'] = $baris['tgl_pesan'];
        $data[$i]['id_recep'] = $baris['id_recep'];
        $data[$i]['id_tamu'] = $baris['id_tamu'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
Function bacasemuaPesan(){
    return bacaPesan("select * from pesan");
}


//tamu
Function bacaTamu($sql){
    $data = array();
    $koneksi = koneksiHotel();
    $hasil = mysqli_query($koneksi, $sql);
    // jika tidak ada record, hasil berupa null
    if (mysqli_num_rows($hasil) == 0) {
            mysqli_close($koneksi);
            return null;
    }
    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)){
        $data[$i]['id_tamu']= $baris['id_tamu'];
        $data[$i]['nama'] = $baris['nama_tamu'];
        $data[$i]['alamat'] = $baris['alamat'];
        $data[$i]['kontak'] = $baris['kontak'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
Function bacasemuaTamu(){
    return bacaTamu("select * from tamu");
}


//tambahkan 1 record ke tabel tamu
Function tambahTamu($id_tamu,$nama_tamu,$alamat,$kontak){
    $koneksi= koneksiHotel();
    $sql= "insert into tamu values(
        '$id_tamu','$nama_tamu','$alamat','$kontak')";
    $hasil = 0;
    if(mysqli_query($koneksi,$sql))
    $hasil = 1;
    mysqli_close($koneksi);
    return $hasil;
}


//tambahkan 1 record ke tabel kamar
Function tambahKamar($kd_kamar,$jenis_kamar,$kd_pesan){
    $koneksi= koneksiHotel();
    $sql= "insert into kamar values(
        '$kd_kamar','$jenis_kamar','$kd_pesan')";
    $hasil = 0;
    if(mysqli_query($koneksi,$sql))
    $hasil = 1;
    mysqli_close($koneksi);
    return $hasil;
}


//tambahkan 1 record ke tabel pesan
Function tambahPesan($kd_pesan,$tgl_pesan,$id_recep,$id_tamu){
    $koneksi= koneksiHotel();
    $sql= "insert into pesan values(
        '$kd_pesan','$tgl_pesan','$id_recep','$id_tamu')";
    $hasil = 0;
    if(mysqli_query($koneksi,$sql))
    $hasil = 1;
    mysqli_close($koneksi);
    return $hasil;
}


//menghapus 1 record berdasarkan field kunci nim
function hapusTamu($id){
    $koneksi = koneksiHotel();
    $sql = "delete from tamu where id_tamu='$id'";
    if (!mysqli_query($koneksi, $sql)){
    die('Error: ' . mysqli_error($koneksi));
    }
    $hasil = mysqli_affected_rows($koneksi);
    mysqli_close($koneksi);
    return $hasil;
}
?>