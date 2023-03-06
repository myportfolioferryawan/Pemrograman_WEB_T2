<?php
// Cek apakah form telah disubmit
if (isset($_POST['simpan'])) {

    // Ambil data dari form
    $kategori_buku = $_POST['kategori_buku'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $bulan_pinjam = $_POST['bulan_pinjam'];
    $tahun_pinjam = $_POST['tahun_pinjam'];
    $nama_petugas = $_POST['nama_petugas'];

    // Hitung tarif sewa
    if ($kategori_buku == 'karya_ilmiah') {
        $tarif_sewa = 10000;
    } else {
        $tarif_sewa = 5000;
    }
    // Tampilkan output
    echo "<h2>Detail Penyewaan</h2>";
    echo "<p>Kategori Buku: " . ucfirst(str_replace('_', ' ', $kategori_buku)) . "</p>";
    echo "<p>Tanggal Pinjam: " . $tanggal_pinjam . " " . ucfirst($bulan_pinjam) . " " . $tahun_pinjam . "</p>";
    echo "<p>Nama Petugas: " . implode(", ", $nama_petugas) . "</p>";
    echo "<p>Tarif Sewa: Rp " . number_format($tarif_sewa, 0, ",", ".") . " per hari</p>";
}
?>

<a href="latihan2.php">Kembali ke Form Penyewaan</a>