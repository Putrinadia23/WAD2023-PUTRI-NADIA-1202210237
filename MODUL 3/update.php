<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include ("connect.php");

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function updateData($connect, $data)
    {
    
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $id = $data['id'];
        $nama_mobil = $data['nama_mobil'];
        $brand_mobil = $data['brand_mobil'];
        $warna_mobil = $data['warna_mobil'];
        $tipe_mobil = $data['tipe_mobil'];
        $harga_mobil = $data['harga_mobil'];

        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $query = "UPDATE showroom_mobil SET 
        nama_mobil='$nama_mobil', 
        brand_mobil='$brand_mobil', 
        warna_mobil='$warna_mobil', 
        tipe_mobil='$tipe_mobil', 
        harga_mobil='$harga_mobil' 
        WHERE id=$id";
        // Eksekusi perintah SQL
        $result = mysqli_query($connect, $query);
        // Buatkan kondisi jika eksekusi query berhasil
        if ($result) {
            echo "<script>alert('Data Berhasil diubah');</script>";
            echo "<script>window.location.href='list_mobil.php';</script>";
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        } else {
            echo "<script>alert('Data Gagal diubah');</script>";
            echo "Error: " . $query . "<br>" . mysqli_error($connect);
        }
    }

    


    // Panggil fungsi update dengan data yang sesuai
    updateData($connect, $data);
}


// Tutup koneksi ke database setelah selesai menggunakan database
exit();

?>