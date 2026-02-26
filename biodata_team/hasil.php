<?php
include "koneksi.php";
$nim = $_GET['nim'];
$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Student Detail</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #FDFFF2, #7897A9);
      font-family: "Poppins", sans-serif;
      color: #111216;
      min-height: 100vh;
      margin: 0;
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

    /* Wrapper */
    .page-wrapper {
      min-height: calc(100vh - 80px);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Card Detail */
    .detail-card {
      width: 100%;
      max-width: 900px;
      background: #FDFFF2;
      padding: 35px 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      border-top: 6px solid #50646F;
      text-align: center;
    }

    /* FOTO: KOTAK + BORDER */
    .detail-card img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 12px;        /* kotak, sedikit rounded */
      border: 4px solid #825E46;  /* border sesuai palette */
      margin-bottom: 20px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }

    .detail-card h3 {
      font-weight: 800;
      margin-bottom: 10px;
    }

    .detail-card p {
      font-family: "Montserrat", sans-serif;
      font-size: 16px;
      margin-bottom: 6px;
    }

    .detail-card p strong {
      color: #50646F;
    }

    .btn-edit {
      background-color: #f0b400;
      border: none;
      color: #111216;
      font-weight: 600;
      padding: 12px;
      border-radius: 10px;
      width: 100%;
      margin-top: 20px;
    }

    .btn-delete {
      background-color: #dc3545;
      border: none;
      color: #FDFFF2;
      font-weight: 600;
      padding: 12px;
      border-radius: 10px;
      width: 100%;
      margin-top: 10px;
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

  <div class="page-wrapper">
    <div class="container">
      <?php if($data){ ?>
        <div class="detail-card">
          <img src="foto/<?php echo $data['foto']; ?>" alt="Foto Mahasiswa">

          <h3><?php echo $data['nama']; ?></h3>

          <p><strong>NIM:</strong> <?php echo $data['nim']; ?></p>
          <p><strong>Universitas:</strong> <?php echo $data['universitas']; ?></p>
          <p><strong>Prodi:</strong> <?php echo $data['program_studi']; ?></p>
          <p><strong>Angkatan:</strong> <?php echo $data['angkatan']; ?></p>
          <p><strong>Pengalaman:</strong><br><?php echo $data['pengalaman']; ?></p>

          <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-edit">Edit</a>
          <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-delete" onclick="return confirm('Yakin mau hapus data ini?')">Delete</a>
        </div>
      <?php } else { ?>
        <div class="alert alert-danger text-center">Data Not Found</div>
      <?php } ?>
    </div>
  </div>

</body>
</html>