<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Umur dan Pekerjaan</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url('Pelita-Bangsa-7.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }

    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.6);
      z-index: 0;
    }

    .container {
      position: relative;
      z-index: 1;
      text-align: center;
    }

    form {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      padding: 25px 40px;
      border-radius: 20px;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      width: 350px;
      margin-top: 20px;
    }

    input, select {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 10px;
      border: none;
      outline: none;
      font-size: 15px;
    }

    button {
      background-color: #ff6b6b;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    button:hover {
      background-color: #ff4c4c;
      transform: scale(1.05);
    }

    h2 {
      color: #fff;
      text-shadow: 0 0 8px rgba(0,0,0,0.6);
    }

    .result {
      margin-top: 30px;
      background: rgba(255,255,255,0.95);
      color: #333;
      padding: 20px;
      border-radius: 15px;
      width: 350px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-10px);}
      to {opacity: 1; transform: translateY(0);}
    }

  </style>
</head>
<body>
  <div class="overlay"></div>

  <div class="container">
    <h2>🧾 Form Data Diri</h2>

    <form method="POST">
      <input type="text" name="nama" placeholder="Masukkan Nama" required>
      <input type="date" name="tanggal_lahir" required>

      <select name="pekerjaan" required>
        <option value="">-- Pilih Pekerjaan --</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Guru">Guru</option>
        <option value="Pegawai">Pegawai</option>
        <option value="Wiraswasta">Wiraswasta</option>
      </select>

      <button type="submit" name="submit">Tampilkan</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur
        $lahir = new DateTime($tanggal_lahir);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir)->y;

        // Tentukan gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case 'Mahasiswa':
                $gaji = "Rp 500.000 / bulan (uang saku)";
                break;
            case 'Guru':
                $gaji = "Rp 5.000.000 / bulan";
                break;
            case 'Pegawai':
                $gaji = "Rp 7.000.000 / bulan";
                break;
            case 'Wiraswasta':
                $gaji = "Rp 10.000.000 / bulan (rata-rata)";
                break;
            default:
                $gaji = "-";
        }

        echo "
        <div class='result'>
          <h3>📋 Hasil Data Diri</h3>
          <p><b>Nama:</b> $nama</p>
          <p><b>Tanggal Lahir:</b> " . date('d F Y', strtotime($tanggal_lahir)) . "</p>
          <p><b>Umur:</b> $umur tahun</p>
          <p><b>Pekerjaan:</b> $pekerjaan</p>
          <p><b>Gaji:</b> $gaji</p>
        </div>";
    }
    ?>
  </div>
</body>
</html>
