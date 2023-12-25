<?php
$nama_pemesan = $_POST['nama_pemesan'];
$nomor_identitas = $_POST['nomor_identitas'];
$no_hp = $_POST['no_hp'];
$tempat_wisata = $_POST['tempat_wisata'];
$tanggal_kunjungan = $_POST['tanggal_kunjungan'];
$pengunjung_dewasa = $_POST['pengunjung_dewasa'];
$pengunjung_anak = $_POST['pengunjung_anak'];
$harga_tiket = $_POST['harga_tiket'];
$total_bayar = $_POST['total_bayar'];
$harga_asli = "10000";
$harga_dewasa = $harga_asli * $pengunjung_dewasa;
$harga_anak = $harga_asli * $pengunjung_anak * 0.50;
$total = $harga_dewasa + $harga_anak;

include "koneksi.php";

$sql = "
INSERT INTO data_tiket (`nama_pemesan`,`nomor_identitas`,`no_hp`,`tempat_wisata`,`tanggal_kunjungan`,`pengunjung_dewasa`,`pengunjung_anak`,`harga_tiket`,`total_bayar`) VALUES('" . $nama_pemesan . "','" . $nomor_identitas . "','" . $no_hp . "','" . $tempat_wisata . "','" . $tanggal_kunjungan . "','" . $pengunjung_dewasa . "','" . $pengunjung_anak . "','" . $harga_tiket . "','" . $total . "')
";

mysqli_query($koneksi, $sql);
?>

<script type="text/javascript">
    alert("Data Berhasil di Simpan !")
    window.open("form_tiket_lanjutan.php", "_self")
</script>