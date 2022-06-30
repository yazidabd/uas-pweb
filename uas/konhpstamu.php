<?php
include('crud.php');
$sql= "select * from tamu";
$data= bacaTamu($sql);
$f = $_GET['id_tamu'];
error_reporting(E_ERROR);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="prohpstamu.php" method="post">
        <h2>Apakah Anda yakin ingin menghapus <?php echo $_GET['id_name']?>?</h2>
        <?php 
        echo"
        <a href='prohpstamu.php?id_tamu=$f'>OK</a>&emsp;
        <a href='hpstamu.php'>Batal</a>";
        ?>
    </form>
</body>
</html>