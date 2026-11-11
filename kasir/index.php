<?php
include "koneksi.php";

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

 <link rel="stylesheet" href="style.css?v=99">
<h2>
    <?php echo $_SESSION['namauser'];?> 
</h2>

<ul>
    <?php if ($_SESSION['role'] === 'administrator') { ?>
        <li><a href="register.php">Registrasi</a></li>
    <?php } ?>
    <li><a href="produk.php">Data Produk</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>