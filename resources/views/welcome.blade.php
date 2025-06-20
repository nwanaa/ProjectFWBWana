<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UKM Kampus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9ff;
      font-family: 'Segoe UI', sans-serif;
    }
    .hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      background: linear-gradient(135deg, #eeeced, #e1bee7);
    }
    .hero h1 {
      font-size: 3rem;
      color: #333;
    }
    .hero p {
      color: #555;
      font-size: 1.2rem;
    }
    .hero a {
      margin-top: 20px;
    }

    .navbar {
      background-color: #1e3a8a; 
    }
    .navbar .navbar-brand, .navbar .btn {
      color: white !important;
    }
    .navbar .btn-outline-primary {
      border-color: white;
      color: white !important;
    }
    .navbar .btn-outline-primary:hover {
      background-color: white;
      color: #1e3a8a !important;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">UKM Kampus</a>
      <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
    </div>
  </nav>

  <section class="hero">
    <div>
      <h1>Selamat Datang di Website UKM Kampus</h1>
      <p>Gabung dan ikuti berbagai Unit Kegiatan Mahasiswa di kampusmu.</p>
      <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Gabung Sekarang</a>
    </div>
  </section>
</body>
</html>
