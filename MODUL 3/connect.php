<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->

<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$connect = mysqli_connect ("localhost:3308","root","","test123");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$connect) {
    echo("Tidak terkoneksi ke database".mysqli_connect_error());
} else {
    echo ("Berhasil terkoneksi ke database ");
}
// 
?>