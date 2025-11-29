PokéCare – Research & Training Center (PRTC) <br>
Sistem simulasi pelatihan Pokémon berbasis PHP OOP dan session. <br>

👤 Data Diri <br>
Nama Lengkap  : David Ananta Nugraha <br>
NIM	          : H1H024025 <br>
Shift Awal    : A <br>
Shift Akhir   : D <br>

📌 Deskripsi Singkat Aplikasi <br>
Aplikasi ini merupakan simulasi pelatihan Pokémon menggunakan PHP berbasis Object-Oriented Programming (OOP).
Pengguna diberikan satu Pokémon (Wartortle) yang bisa dilatih dengan memilih jenis latihan dan intensitas (1–5).
Setiap latihan akan mempengaruhi level, HP, dan menghasilkan log riwayat yang disimpan dalam $_SESSION. <br>

🛠 Penjelasan Kode (Singkat) <br>
1. Class Pokemon (Abstrak) <br>
   Berisi: <br>
      properti dasar: name, type, level, hp <br>
      getter method <br>
      abstract method specialMove() <br>
      method latihan dasar train() <br>

2. Class Wartortle <br>
   Menurunkan class Pokemon dengan: <br>
      nilai default Pokémon <br>
      jurus spesial: Aqua Jet <br>
      override train() untuk menambah bonus HP <br>

3. Session Management <br>
   Pokémon disimpan dalam $_SESSION['myPokemon'] <br>
   Riwayat disimpan dalam $_SESSION['history'] <br>
   Di-serialize agar bisa disimpan sebagai object <br>

5. Halaman Penting <br>
   index.php → Dashboard Pokémon <br>
   latihan.php → Form & hasil latihan <br>
   riwayat.php → Tabel log aktivitas <br>
   pokemon.php → Class OOP Pokémon <br>

🚀 Cara Menjalankan <br>
Letakkan project di folder htdocs XAMPP <br>
Jalankan Apache <br>
Akses melalui browser: <br>
