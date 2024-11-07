<?php
function generateCSV($nim, $nama, $gender, $alamat, $notelp, $email) {
    // Susun data untuk CSV
    $data = [
        ["NIM", "Nama", "JenisKelamin", "Alamat", "No.telp", "Email"],
        [$nim, $nama, $gender, $alamat, $notelp, $email]
    ];

    // Set header untuk download CSV
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="data.csv"');

    // Tulis data ke output sebagai CSV
    $fp = fopen('php://output', 'w');
    foreach ($data as $line) {
        fputcsv($fp, $line);
    }
    fclose($fp);
    exit; // Hentikan eksekusi setelah CSV dibuat
}
?>
