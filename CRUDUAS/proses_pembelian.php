<?php include 'koneksi.php';

if (isset($_POST['btnProses']) && $_POST['btnProses'] == 'upload') {
  
    $id_pembelian= $_POST['id_pembelian'];
    $tanggal_pembelian = $_POST['tanggal_pembelian'];
    $pembeli_id = $_POST['pembeli_id'];
    
    mysqli_query($koneksi,"INSERT INTO pembelian VALUES('$id_pembelian', '$tanggal_pembelian', '$pembeli_id')");
    echo '<script>alert("Data Berhasil ditambahkan"); document.location.href = "index.php"; </script>';
}
?>
