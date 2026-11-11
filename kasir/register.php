<?php
include "koneksi.php";
session_start();

if (isset($_POST['daftar'])) {
    mysqli_query($koneksi, "INSERT INTO user VALUES('', '$_POST[username]', '$_POST[password]', '$_POST[namauser]', '$_POST[role]')");
    echo "<script>alert('Berhasil!'); window.location='index.php';</script>";
}
?>
 <link rel="stylesheet" href="style.css?v=99">
<a href="index.php">Kembali</a>
<form method="POST">
    <h3>Registrasi Petugas</h3>
    Nama: <input type="text" name="namauser" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Role: <input type="role" value="petugas" required><br><br>
    <button type="submit" name="daftar">Simpan</button>
</form>