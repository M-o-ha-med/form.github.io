<?php
session_start();
$nim = $_SESSION['NIM'];
$nama = $_SESSION['Nama'];
$gender = $_SESSION['Jenis_kelamin'];
$alamat = $_SESSION['Alamat'];
$notelp = $_SESSION['Nomor_telepon'];
$email = $_SESSION['Email'];
$data = array(["NIM","Nama","JenisKelamin","Alamat","No.telp","Email"],["$nim,$nama,$gender,$alamat,$notelp,$email"]);
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data.csv"');

$fp = fopen('php://output', 'w');
foreach ( $data as $line ) {

    fputcsv($fp, $line);
}
fclose($fp);

?>
