<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Digital</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      background-color: #f4f6f9;
      color: #1a1a1a;
    }

    /* Navbar */
    header {
      background-color: #0b2b5c;
      padding: 15px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .logo {
      color: white;
      font-size: 20px;
      font-weight: bold;
    }

    header nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 15px;
      transition: 0.3s;
    }

    header nav a:hover {
      color: #ffcc00;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(11, 43, 92, 0.85), rgba(11, 43, 92, 0.85)),
        url("https://images.unsplash.com/photo-1524995997946-a1c2e315a42f") center/cover;
      height: 85vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      padding: 20px;
    }

    .hero h1 {
      font-size: 45px;
      margin-bottom: 15px;
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 25px;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      line-height: 1.6;
    }

    /* Search Box */
    .search-box {
      margin-top: 20px;
    }

    .search-box input {
      padding: 12px;
      width: 320px;
      border: none;
      border-radius: 6px;
      outline: none;
      font-size: 14px;
    }

    .search-box button {
      padding: 12px 18px;
      border: none;
      border-radius: 6px;
      background-color: #ffcc00;
      font-weight: bold;
      cursor: pointer;
      margin-left: 8px;
      transition: 0.3s;
    }

    .search-box button:hover {
      background-color: #e6b800;
    }

    /* Info Cards */
    .info {
      display: flex;
      justify-content: center;
      gap: 20px;
      padding: 50px 20px;
      flex-wrap: wrap;
    }

    .card {
      background-color: white;
      width: 260px;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
      text-align: center;
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      margin-bottom: 10px;
      color: #0b2b5c;
    }

    .card p {
      font-size: 14px;
      color: #555;
      line-height: 1.5;
    }

    /* Footer */
    footer {
      background-color: #0b2b5c;
      color: white;
      text-align: center;
      padding: 18px;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <header>
    <div class="logo">📚 Perpustakaan Digital</div>
    <nav>
      <a href="#">Beranda</a>
      <a href="#">Profil</a>
      <a href="#">Katalog</a>
      <a href="#">Layanan</a>
      <a href="#">Kontak</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div>
      <h1>Selamat Datang</h1>
      <p>
        Website resmi Perpustakaan Digital sebagai pusat layanan informasi, literasi,
        dan sumber pengetahuan untuk mendukung kegiatan akademik.
      </p>

      <div class="search-box">
        <input type="text" placeholder="Cari judul buku, penulis, atau kategori...">
        <button>Cari</button>
      </div>
    </div>
  </section>

  <!-- Info Cards -->
  <section class="info">
    <div class="card">
      <h3>Katalog Koleksi</h3>
      <p>Telusuri koleksi buku, jurnal, dan sumber referensi akademik secara cepat.</p>
    </div>

    <div class="card">
      <h3>Layanan Perpustakaan</h3>
      <p>Informasi layanan peminjaman, pengembalian, referensi, serta ruang baca.</p>
    </div>

    <div class="card">
      <h3>Keanggotaan</h3>
      <p>Daftar sebagai anggota perpustakaan untuk mendapatkan akses layanan penuh.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    © 2026 Perpustakaan Digital | Universitas/Instansi Anda
  </footer>

</body>
</html>
