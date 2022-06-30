<?php
    include('crud.php');
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel-kamar</title>
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
                        $data = bacasemuaKamar();
                        if($data ==null){
                            echo "tidak ada kamar";
                        }else{
                    ?>
                <table width="700px">
                <tr>
                    <td>Kode</td>
                    <td>Tipe Kamar</td>
                    <td>Kode Pesanan</td>
                </tr>        
                <?php
                foreach($data as $kamar){
                    $kd = $kamar['kode'];
                    $jenis = $kamar['tipe'];
                    $kd_pesan = $kamar['kd_pesan'];
                    echo "
                        <tr>
                            <td>$kd</td>
                            <td>$jenis</td>
                            <td>$kd_pesan</td>
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