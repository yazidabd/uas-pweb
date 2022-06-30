<?php
    include('crud.php');
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel-pesan</title>
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
                        $data = bacasemuaPesan();
                        if($data ==null){
                            echo "tidak ada pemesanan";
                        }else{
                    ?>
                <table width="700px">
                <tr>
                    <td>Kode</td>
                    <td>Tanggal</td>
                    <td>Id_recep</td>
                    <td>Id_tamu</td>
                </tr>        
                <?php
                foreach($data as $pesan){
                    $kd = $pesan['kode'];
                    $tgl = $pesan['tanggal'];
                    $id_re = $pesan['id_recep'];
                    $id_tamu = $pesan['id_tamu'];
                    echo "
                        <tr>
                            <td>$kd</td>
                            <td>$tgl</td>
                            <td>$id_re</td>
                            <td>$id_tamu</td>
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