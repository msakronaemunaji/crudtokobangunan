<?php include 'koneksi.php';

if (isset($_POST['btnProses']) && $_POST['btnProses'] == 'upload') {
  
    $id_detail = $_POST['id_detail'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $pembelian_id_pembelian = $_POST['pembelian_id_pembelian'];
    $produk_id = $_POST['produk_id'];
    
    mysqli_query($koneksi,"INSERT INTO detail_pembelian VALUES('$id_detail', '$qty', '$harga', '$pembelian_id_pembelian', '$produk_id')");
    echo '<script>alert("Data Berhasil ditambahkan"); document.location.href = "index.php"; </script>';
}
?>
