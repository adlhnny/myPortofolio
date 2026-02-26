<?php
$conn = mysqli_connect("localhost","root","","db_biodata");

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id='$id'"));

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $universitas = $_POST['universitas'];
    $program_studi = $_POST['program_studi'];
    $angkatan = $_POST['angkatan'];
    $pengalaman = $_POST['pengalaman'];

    if($_FILES['foto']['name'] != ""){

        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $nama_baru = time().".".$ext;
        $tmp = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmp, "images/".$nama_baru);

        if(file_exists("images/".$data['foto'])){
            unlink("images/".$data['foto']);
        }

        mysqli_query($conn,"UPDATE mahasiswa SET
        nama='$nama',
        nim='$nim',
        universitas='$universitas',
        program_studi='$program_studi',
        angkatan='$angkatan',
        pengalaman='$pengalaman',
        foto='$nama_baru'
        WHERE id='$id'");
    } else {

        mysqli_query($conn,"UPDATE mahasiswa SET
        nama='$nama',
        nim='$nim',
        universitas='$universitas',
        program_studi='$program_studi',
        angkatan='$angkatan',
        pengalaman='$pengalaman'
        WHERE id='$id'");
    }

    echo "<script>alert('Data berhasil diupdate');window.location='team.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #FDFFF2, #7897A9);
      font-family: "Segoe UI", Tahoma, sans-serif;
      color: #111216;
      min-height: 100vh;
    }

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
      font-size: 26px;
    }

    .form-group {
      margin-bottom: 16px;
    }

    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
      font-size: 15px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: 1.5px solid #7897A9;
      outline: none;
      font-size: 15px;
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
      font-size: 17px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      margin-top: 10px;
    }

    .btn-submit:hover {
      background: #6f4f3b;
    }

    .preview-img {
      display: block;
      margin: 0 auto 15px auto;
      width: 140px;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
      border: 3px solid #50646F;
    }
  </style>
</head>
<body>

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

<div class="form-card">
  <h2>Edit Data Mahasiswa</h2>

  <form method="POST" enctype="multipart/form-data">

    <img src="images/<?php echo $data['foto']; ?>" class="preview-img">

    <div class="form-group">
      <label>Ganti Foto</label>
      <input type="file" name="foto">
    </div>

    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
    </div>

    <div class="form-group">
      <label>NIM</label>
      <input type="text" name="nim" value="<?php echo $data['nim']; ?>" required>
    </div>

    <div class="form-group">
      <label>Universitas</label>
      <input type="text" name="universitas" value="<?php echo $data['universitas']; ?>" required>
    </div>

    <div class="form-group">
      <label>Program Studi</label>
      <input type="text" name="program_studi" value="<?php echo $data['program_studi']; ?>" required>
    </div>

    <div class="form-group">
      <label>Angkatan</label>
      <input type="number" name="angkatan" value="<?php echo $data['angkatan']; ?>" required>
    </div>

    <div class="form-group">
      <label>Pengalaman</label>
      <textarea name="pengalaman" rows="4"><?php echo $data['pengalaman']; ?></textarea>
    </div>

    <button type="submit" name="update" class="btn-submit">Update Data</button>

  </form>
</div>

</body>
</html>