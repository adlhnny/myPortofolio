<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Team Members</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body{
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

    /* Judul */
    h2 {
      font-weight: 800;
      margin-top: 40px;
      color: #111216;
    }

    /* Grid container */
    .team-container{
      display:grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap:30px;
      margin-top:50px;
      margin-bottom: 60px;
    }

    /* Card */
    .team-card{
      background:#FDFFF2;
      padding:25px 20px;
      border-radius:16px;
      box-shadow:0 6px 20px rgba(0,0,0,0.12);
      text-align:center;
      transition:0.3s;
      border-top: 5px solid #50646F;
    }

    .team-card:hover{
      transform: translateY(-6px);
    }

    /* FOTO: PERSEGI PANJANG 3x4 + BORDER */
    .team-card img{
      width: 150px;
      height: 200px;          /* rasio 3x4 */
      object-fit: cover;
      border-radius: 10px;    /* kotak agak halus */
      border: 4px solid #825E46;
      margin-bottom:15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
      background: #FDFFF2;
    }

    .team-card h5{
      font-family: "Montserrat", sans-serif;
      font-weight: 600;
      margin-top: 10px;
      color: #111216;
      font-size: 16px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php">Team Project</a>
  </div>
</nav>

<div class="container">
  <h2 class="text-center">Our Team Members</h2>

  <div class="team-container">

    <div class="team-card">
      <img src="foto/radina.jpeg" alt="Radina">
      <h5>Radina Amaliah Ramli</h5>
    </div>

    <div class="team-card">
      <img src="foto/dila.jpeg" alt="Dila">
      <h5>Siti Adhylah Umihany Polanunu</h5>
    </div>

    <div class="team-card">
      <img src="foto/kiya.jpeg" alt="Kiya">
      <h5>Andi Zaskiya Ilham</h5>
    </div>

    <div class="team-card">
      <img src="foto/qela.jpeg" alt="Qela">
      <h5>Aqelah Resty Amaliah</h5>
    </div>

    <div class="team-card">
      <img src="foto/musaril.jpeg" alt="Musaril">
      <h5>Musaril</h5>
    </div>

    <div class="team-card">
      <img src="foto/wesly.jpeg" alt="Wesly">
      <h5>Wesly Sirenden</h5>
    </div>

    <div class="team-card">
      <img src="foto/thomas.jpeg" alt="Thomas">
      <h5>Thomas Kwaito</h5>
    </div>

  </div>
</div>

</body>
</html>