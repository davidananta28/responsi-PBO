PokéCare – Research & Training Center (PRTC) <br>
Sistem simulasi pelatihan Pokémon berbasis PHP OOP dan session. <br>

👤 Data Diri
Nama Lengkap  : David Ananta Nugraha <br>
NIM	          : H1H024025 <br>
Shift Awal    : A 
Shift Akhir   : D

📌 Deskripsi Singkat Aplikasi
Aplikasi ini merupakan simulasi pelatihan Pokémon menggunakan PHP berbasis Object-Oriented Programming (OOP).
Pengguna diberikan satu Pokémon (Wartortle) yang bisa dilatih dengan memilih jenis latihan dan intensitas (1–5).
Setiap latihan akan mempengaruhi level, HP, dan menghasilkan log riwayat yang disimpan dalam $_SESSION.

🛠 Penjelasan Kode (Singkat)
1. Class Pokemon (Abstrak)
   Berisi:
      properti dasar: name, type, level, hp
      getter method
      abstract method specialMove()
      method latihan dasar train()

2. Class Wartortle
   Menurunkan class Pokemon dengan:
      nilai default Pokémon
      jurus spesial: Aqua Jet
      override train() untuk menambah bonus HP

3. Session Management
   Pokémon disimpan dalam $_SESSION['myPokemon']
   Riwayat disimpan dalam $_SESSION['history']
   Di-serialize agar bisa disimpan sebagai object

5. Halaman Penting
   index.php → Dashboard Pokémon
   latihan.php → Form & hasil latihan
   riwayat.php → Tabel log aktivitas
   pokemon.php → Class OOP Pokémon

🚀 Cara Menjalankan
Letakkan project di folder htdocs XAMPP
Jalankan Apache
Akses melalui browser:
