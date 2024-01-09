<?php include 'koneksi.php';

if (isset($_POST['btnProses']) && $_POST['btnProses'] == 'upload') {
  
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $jenis_jenis_id = $_POST['jenis_jenis_id'];
    
    mysqli_query($koneksi,"INSERT INTO produk VALUES('$id', '$nama', '$harga', '$stok', '$jenis_jenis_id')");
    echo '<script>alert("Data Berhasil ditambahkan"); document.location.href = "index.php"; </script>';
}
?>
