<?php
    include('crud.php');
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel-tamu</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div id="content">
            <div id="side">
                <ul>
                    <li><a href="pesan.php">Pesan</a></li>
                    <li><a href="tamu.php">Tamu</a></li>
                    <li><a href="kamar.php">Kamar</a></li>
                </ul>
            </div>
            <div id="side2">
                <div id="user">
                        <?php
                            echo ''.$_SESSION['namauser'];
                        ?>
                </div><br>
                <div id="table">
                    <?php
                        $data = bacasemuaTamu();
                        if($data ==null){
                            echo "tidak ada tamu";
                        }else{
                    ?>
                <table width="700px">
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Kontak</td>
                    <td>Proses</td>
                </tr>        
                <?php
                foreach($data as $tamu){
                    $id = $tamu['id_tamu'];
                    $nama = $tamu['nama'];
                    $alamat = $tamu['alamat'];
                    $kontak = $tamu['kontak'];
                    echo "
                        <tr>
                            <td>$id</td>
                            <td>$nama</td>
                            <td>$alamat</td>
                            <td>$kontak</td>
                            <td><a href='konhpstamu.php'>Hapus</a></td>
                        </tr>
                    ";
                }
                echo '</table>';
                }
                ?>
                <a href="tmbpesan.php"><p>tambah</p></a>
                </div> 
            </div>
        </div>     
        <footer>
            <br>
            <p>--HOTEL--</p>
        </footer>             
    </div>
</body>
</html>