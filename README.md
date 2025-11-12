**1. Kode HTML dan CSS untuk mendefinisikan tampilan tata letak halaman web form**
<img width="1920" height="1080" alt="Screenshot (154)" src="https://github.com/user-attachments/assets/128d9c33-3fcc-42bd-acf8-279fffe8680d" />
Bagian ini memiliki metode pengiriman data POST ke file biodata.php itu sendiri.   
Input fields: 
• Nama (tipe text).   
• Tanggal Lahir (tipe date).   
• Pilihan Pekerjaan (select dropdown): 
• "Pilih Pekerjaan" (default).   
• "PNS".   
• "Pegawai Swasta".   
• "Mahasiswa".

**2. Style CSS**
<img width="1920" height="1080" alt="Screenshot (155)" src="https://github.com/user-attachments/assets/42fd39ff-0f5f-413c-81e4-7274f57c8613" />
CSS digunakan untuk mengatur tampilan dan tata letak. 
A. Body Styling: 
• Menggunakan font-family arial.   
• Latar belakang menggunakan gambar Pelita Bangsa yang diatur untuk tidak diulang (no
repeat), berada di tengah (center centered), dan ukurannya disesuaikan (background-size: 
cover).   
• Lapisan gelap (background: rgba(0,0,0,0.6)) diterapkan di atas latar belakang gambar 
untuk meningkatkan kontras.   
• Menggunakan Flexbox (display: flex, flex-direction: column, justify-content: center) 
untuk menempatkan konten di tengah layar.   
B. Container Styling: 
• Digunakan untuk wadah utama form/hasil.   
• Memiliki latar belakang semi-transparan putih (rgba(255, 255, 255, 0.15)).   
• Menggunakan efek backdrop-filter: blur(4px) untuk mengaburkan latar belakang di 
belakang kontainer.   
• Memiliki box-shadow.   
C. Form Elements: 
• input dan select memiliki border-radius dan menghilangkan outline saat fokus.   
• Tombol (button) memiliki warna latar belakang hijau (#008CBA), teks putih, dan 
padding.   
• Efek hover pada tombol mengubah warna latar belakang dan menerapkan transformasi 
scale(1.05) (sedikit membesar).   
D. Result Styling (.result): 
• Latar belakang sangat transparan (rgb(255,255,255,0.05)) dan memiliki box-shadow.   
E. Animasi (@keyframes FadeIn): 
• Mendefinisikan animasi yang membuat elemen muncul dengan efek memudar (dari 
opacity: 0 ke opacity: 1) dan sedikit bergerak ke bawah (transform: translate(-10px) 
ke translate(0)).

**3. Kode PHP**
<img width="1920" height="1080" alt="Screenshot (156)" src="https://github.com/user-attachments/assets/e63779e8-8de3-4348-ab7e-89715aef9faa" />
<img width="1920" height="1080" alt="Screenshot (157)" src="https://github.com/user-attachments/assets/ac56b3e5-546d-458a-9f16-2229e89fb80c" />
<img width="1920" height="1080" alt="Screenshot (158)" src="https://github.com/user-attachments/assets/e966e80a-1e0d-467e-b37e-6a62fd1fe568" />
Logika PHP berada dalam blok if (isset($_POST['tampil'])) yang dieksekusi ketika tombol 
submit (dengan name tampil) ditekan.   
A. Penerimaan Data: Data dari form diambil menggunakan variabel superglobal $_POST.   
• $tanggal_lahir = $_POST['tanggal_lahir'];   
• $pekerjaan = $_POST['pekerjaan'];   
B. Perhitungan Umur: 
• Mengambil tanggal lahir ($lahir = new DateTime($tanggal_lahir);) dan tanggal hari ini 
($hari_ini = new DateTime();).   
• Menghitung selisih ($umur = $hari_ini->diff($lahir);).   
• Umur dalam tahun diambil menggunakan $umur->y.   
C. Logika Gaji (Menggunakan switch): Gaji ($gaji) ditentukan berdasarkan nilai pekerjaan 
yang dipilih:   
• case 'PNS': Rp 7.000.000.   
• case 'Pegawai Swasta': Rp 10.000.000 (rata-rata).   
• case 'Mahasiswa': Rp 500.000 (uang saku).   
• default: "-".   
D. Output Hasil (div class='result'): Data yang telah diproses ditampilkan dalam blok hasil 
(result):   
• Nama: $_POST['nama'].   
• Tanggal Lahir: Format diubah ke d F Y.   
• Umur: $umur->y tahun.   
• Pekerjaan: $pekerjaan.   
• Gaji: $gaji.

**4. Hasil**
<img width="1920" height="1080" alt="Screenshot (159)" src="https://github.com/user-attachments/assets/c660759c-15ec-4090-8014-fe295b425a57" />![Deskripsi gambar] [Uploading Screenshot (159).png…]()
Tampilan akhir menunjukkan hasil eksekusi kode PHP di browser. 
A. Latar Belakang: Kampus Pelita Bangsa.   
B. Form Data Diri: Form di bagian atas dengan input Nama, Tanggal Lahir (mm/dd/yyyy), 
dan dropdown Pekerjaan.   
C. Tombol: "Tampilkan".   
D. Hasil Data Diri: Terletak di bagian bawah, menunjukkan data yang diinput dan diproses:   
• Nama: Muhammad Fauzan Gifari.   
• Tanggal Lahir: 27 November 2003.   
• Umur: 21 tahun.   
• Pekerjaan: Mahasiswa.   
• Gaji: Rp 500.000/bulan (uang saku).


