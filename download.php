<?php
session_start();

// Get form input values
$nim = $_GET['NIM'];
$nama = $_GET['Nama'];
$gender = $_GET['Jenis_kelamin'];
$alamat = $_GET['Alamat'];
$notelp = $_GET['Nomor_telepon'];
$email = $_GET['Email'];

// Define data array with a header and input values as separate elements
$data = [
    ["NIM", "Nama", "JenisKelamin", "Alamat", "No.telp", "Email"],
    [$nim, $nama, $gender, $alamat, $notelp, $email]
];

// Set headers to indicate file download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data.csv"');

// Open output stream for CSV data
$fp = fopen('php://output', 'w');

// Write each row to the CSV
foreach ($data as $line) {
    fputcsv($fp, $line);
}

// Close the file pointer
fclose($fp);
exit;
?>
