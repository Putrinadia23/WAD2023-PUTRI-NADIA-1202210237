<?php 

// (1) Hapus cookie dengan key id 
setcookie("id","",time()-3600 ,"/WAD2023-PUTRI-NADIA-1202210237/MODUL%204/views");
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();

//

// (4) Lakukan redirect ke halaman login awal
header('Location:../views/login.php');

//

exit;

?>