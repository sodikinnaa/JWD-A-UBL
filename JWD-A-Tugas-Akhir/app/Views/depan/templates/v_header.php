<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pariwisata Indonesia</title>
  <!-- Link ke Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .header {
      background-color: #a3d8f4;
      padding: 20px;
      text-align: center;
    }
    .header h1 {
      margin: 0;
      font-size: 2.5em;
    }
    .header p {
      margin: 0;
      font-size: 1.2em;
      color: #666;
    }
    .navbar-dark .navbar-nav .nav-link {
      color: rgba(255,255,255,.75);
    }
    .card {
      margin-bottom: 20px;
    }
    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      padding-top: 30px;
      height: 0;
      overflow: hidden;
    }
    .video-container iframe, .video-container object, .video-container embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Pariwisata Indonesia</h1>
    <p>Wonderful Indonesia</p>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Beranda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/pendaftaran-wisata">Pendaftaran Paket Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/wisata/daftar-pesanan">Daftar Pesanan</a>
        </li>
      </ul>
    </div>
  </nav>
