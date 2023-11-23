<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbs = mysqli_connect('localhost:3308','root','','MODUL 4');
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$dbs) {
    die ("Koneksi gagal: ". mysqli_connect_error());
}
// 
 
?>