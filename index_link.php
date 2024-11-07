
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form biodata</title>
    <link href='styles.css' rel = stylesheet>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1> Form Biodata Mahasiswa</h1>
      <form action="" method="GET">
        <label for="NIM">NIM</label><input type="text" name="NIM" value="" id="NIM">
        <label for="Nama">Nama</label><input type="text" name="Nama" value="" id="Nama">

        <div class = "radioButtons">
          <span> Jenis Kelamin </span><br>
          <input type="radio" name="Jenis_kelamin" value="Pria" id="Jenis_kelamin1"><label for="Jenis_kelamin1" id="pria">Pria</label>
          <input type="radio" name="Jenis_kelamin" value="Wanita" id="Jenis_kelamin2"><label for="Jenis_kelamin2" id="wanita">Wanita</label>
          <br>
          <br>
        </div>
        <label for="Alamat">Alamat</label><input type="text" name="Alamat" value="" id="Alamat">
        <label for="Nomor_telepon">Nomor telepon</label><input type="text" name="Nomor_telepon" value="" id="Nomor_telepon">
        <label for="Email">Email</label><input type="text" name="Email" value="" id="Email">
        <input type="submit" name="button" id=SubmitData value="Submit">


      </form>

      
      
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
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

      echo "<h3>Data berhasil disimpan!</h3>";
     

      }
      ?>
    </div>



  </body>
</html>
