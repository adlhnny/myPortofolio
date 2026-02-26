<?php
$conn = mysqli_connect("localhost","root","","db_biodata");

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $universitas = $_POST['universitas'];
  $program_studi = $_POST['program_studi'];
  $angkatan = $_POST['angkatan'];
  $pengalaman = $_POST['pengalaman'];

  $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
  $nama_baru = time().".".$ext;
  $tmp = $_FILES['foto']['tmp_name'];

  if(!is_dir("foto")){
    mkdir("foto");
  }

  move_uploaded_file($tmp, "foto/".$nama_baru);

  mysqli_query($conn, "INSERT INTO mahasiswa
  (nama,nim,universitas,program_studi,angkatan,pengalaman,foto)
  VALUES ('$nama','$nim','$universitas','$program_studi','$angkatan','$pengalaman','$nama_baru')");

  echo "<script>alert('Data berhasil ditambahkan');window.location='team.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #FDFFF2, #7897A9);
      font-family: "Segoe UI", Tahoma, sans-serif;
      color: #111216;
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      background-color: #50646F !important;
      padding: 12px 0;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    .navbar-brand {
      color: #FDFFF2 !important;
      font-weight: 700;
      padding: 6px 14px;
      border: 2px solid #FDFFF2;
      border-radius: 10px;
    }

    .navbar .nav-link {
      color: #FDFFF2 !important;
      margin-left: 12px;
      padding: 6px 14px;
      border-radius: 10px;
      border: 1px solid transparent;
      transition: all 0.2s ease;
    }

    .navbar .nav-link:hover {
      color: #111216 !important;
      background-color: #FDFFF2;
      border: 1px solid #825E46;
    }

    /* Form Card */
    .form-card {
      max-width: 600px;
      margin: 80px auto;
      background: #FDFFF2;
      padding: 32px 36px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      border-top: 6px solid #50646F;
    }

    .form-card h2 {
      text-align: center;
      margin-bottom: 28px;
      color: #50646F;
      font-weight: 700;
      font-size: 26px;          /* ⬅ ukuran judul form */
    }

    .form-group {
      margin-bottom: 16px;
    }

    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
      font-size: 15px;          /* ⬅ ukuran label */
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: 1.5px solid #7897A9;
      outline: none;
      font-size: 15px;          /* ⬅ ukuran teks input */
    }

    .form-group input:focus,
    .form-group textarea:focus {
      border-color: #50646F;
      box-shadow: 0 0 0 0.15rem rgba(80,100,111,0.25);
    }

    .btn-submit {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background: #825E46;
      color: #FDFFF2;
      font-size: 17px;          /* ⬅ ukuran tombol */
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      margin-top: 10px;
    }

    .btn-submit:hover {
      background: #6f4f3b;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php">Team Project</a>

      <div class="ms-auto">
        <a class="nav-link d-inline" href="check.php">Check Student ID</a>
        <a class="nav-link d-inline" href="add.php">Add Members</a>
        <a class="nav-link d-inline" href="team.php">Team Members</a>
      </div>
    </div>
  </nav>

  <!-- Form -->
  <div class="form-card">
    <h2>Tambah Data Mahasiswa</h2>

    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" required>
      </div>

      <div class="form-group">
        <label>NIM</label>
        <input type="text" name="nim" required>
      </div>

      <div class="form-group">
        <label>Universitas</label>
        <input type="text" name="universitas" required>
      </div>

      <div class="form-group">
        <label>Program Studi</label>
        <input type="text" name="program_studi" required>
      </div>

      <div class="form-group">
        <label>Angkatan</label>
        <input type="number" name="angkatan" required>
      </div>

      <div class="form-group">
        <label>Pengalaman</label>
        <textarea name="pengalaman" rows="4"></textarea>
      </div>

      <div class="form-group">
        <label>Foto</label>
        <input type="file" name="foto" required>
      </div>

      <button type="submit" name="submit" class="btn-submit">Simpan</button>
    </form>
  </div>

</body>
</html>