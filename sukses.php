<?php
if (empty($_POST['nama'] && $_POST['email'])) {
    header("location:kosong.php");
} else {

    echo "<center>Nama : " . $_POST['nama'] . "</center><br>";
    echo "<center>Email : " . $_POST['email'] . "</center><br>";
    echo "<center>Tanggal : " . $_POST['date'] . "</center><br>";
}