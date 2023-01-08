<?php 
  require 'functions.php';
  
  // cek apakah tombol submit sudah ditekan atau belum
  if( isset($_POST["submit"]) ) {

    // var_dump($_POST); 
    // var_dump($_FILES);
    // die;
    
    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
      echo "
        <script>
          alert('data berhasil ditambahkan!');
          document.location.href = 'tabel.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('data gagal ditambahkan!');
          document.location.href = 'tas.php';
        </script>
      ";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data</title>
  <link rel="stylesheet" href="tambah.css">
</head>
<body>
  <div class="wrapper">
      <h1>Tambah Data Mahasiswa</h1>
  
  </div>
      <div class="container">
        <div class="box">
          <form action="" method="post" enctype="multipart/form-data" cellpadding="10" cellspacing="0" align="center">
                  <div class="field">
                      <input type="text" name="nim" id="nim" placeholder="Masukkan NIM" required>
                  </div>
                  <div class="field">
                      <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
                  </div>
                  <div class="field">
                      <input type="text" name="email" id="email" placeholder="Masukkan Email" required>
                  </div>
                  <div class="field">
                      <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan jurusan" required>
                  </div>
                  <div class="field1">
                      <input type="file" name="gambar" id="gambar">
                      
                  </div>
                  <div class="field2">
                      <button type="submit" name="submit">Simpan</button>
                  </div>
                  <div class="back">
                    <button><a href="tabel.php">Kembali..</a></button>
                  </div>


            </form>
        </div>
          
      </div>

  
  
  
  

</body>
</html>