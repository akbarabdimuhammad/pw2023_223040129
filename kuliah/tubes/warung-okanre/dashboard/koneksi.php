<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'db_warung_okanre';

    $conn = mysqli_connect($hostname, $username, $password, $dbname); 
    if (!$conn) { //cek koneksi
        die("Tidak bisa terkoneksi ke database");
    }
?>