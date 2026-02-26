<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Check Student ID</title>

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

    /* Navbar (kalau mau dipakai juga di halaman ini) */
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

    /* Wrapper supaya card di tengah layar */
    .page-wrapper {
      min-height: calc(100vh - 80px);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Card form */
    .check-card {
      width: 100%;
      max-width: 700px;
      background: #FDFFF2;
      padding: 30px 35px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      border-top: 6px solid #50646F;
    }

    .check-card h3 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 800;
      color: #111216;
    }

    label {
      font-family: "Montserrat", sans-serif;
      font-weight: 600;
      margin-bottom: 6px;
    }

    .form-control {
      padding: 12px;
      border-radius: 10px;
      border: 1.5px solid #7897A9;
    }

    .form-control:focus {
      border-color: #50646F;
      box-shadow: 0 0 0 0.2rem rgba(80,100,111,0.25);
    }

    .btn-search {
      background-color: #825E46;
      border: none;
      color: #FDFFF2;
      font-weight: 600;
      padding: 12px;
      border-radius: 10px;
      transition: 0.2s ease;
    }

    .btn-search:hover {
      background-color: #111216;
      color: #FDFFF2;
    }
  </style>
</head>
<body>

  <!-- Navbar (opsional, tapi biar konsisten dengan index) -->
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

  <!-- Konten -->
  <div class="page-wrapper">
    <div class="check-card">
      <h3>Check Student ID</h3>

      <form method="GET" action="hasil.php">
        <div class="mb-3">
          <label>Enter NIM</label>
          <input type="text" name="nim" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-search w-100">Search</button>
      </form>
    </div>
  </div>

</body>
</html>