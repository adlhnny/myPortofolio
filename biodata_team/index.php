<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Team Project</title>

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

    /* Wrapper supaya konten di tengah layar */
    .hero-wrapper {
      min-height: calc(100vh - 80px); /* dikurangi tinggi navbar */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero h1 {
      font-weight: 800;
      font-size: 48px;
      margin-bottom: 14px;
      letter-spacing: 0.5px;
    }

    /* Subtitle dengan border (badge) */
    .subtitle-badge {
      display: inline-block;
      font-family: "Montserrat", sans-serif;
      color: #50646F;
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 0.5px;
      padding: 8px 18px;
      border: 2px solid #825E46;   /* warna border */
      border-radius: 999px;        /* bentuk kapsul */
      background-color: rgba(253, 255, 242, 0.7); /* krem lembut */
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

  <!-- Hero (tengah layar) -->
  <div class="hero-wrapper">
    <div class="hero">
      <h1>Welcome to Our Team Website</h1>
      <p class="subtitle-badge">Portal Informasi Mahasiswa Terapi Gigi</p>
    </div>
  </div>

</body>
</html>