<?php
session_start();
$nim = $_GET['NIM'];
$nama = $_GET['Nama'];
$gender = $_GET['Jenis_kelamin'];
$alamat = $_GET['Alamat'];
$notelp = $_GET['Nomor_telepon'];
$email = $_GET['Email'];
$data = array(["NIM","Nama","JenisKelamin","Alamat","No.telp","Email"],["$nim,$nama,$gender,$alamat,$notelp,$email"]);
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data.csv"');

$fp = fopen('php://output', 'w');
foreach ( $data as $line ) {

    fputcsv($fp, $line);
}
fclose($fp);

?>
