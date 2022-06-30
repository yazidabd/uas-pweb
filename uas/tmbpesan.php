<!DOCTYPE html>
<html>
<head>
    <title>Tambah-pesan</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <h2>Form pesan</h2>
        <div class="form">
            <form method="post" action="protmbpesan.php">
                <input type="text" placeholder="kd_pesan" name="kd_pesan">
                <input type="text" placeholder="tgl_pesan" name="tgl_pesan">
                <input type="text" placeholder="id_recep" name="id_recep">
                <input type="text" placeholder="id_tamu" name="id_tamu">
                <button type="submit" value="tambah">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>