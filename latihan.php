<?php
session_start();
require 'pokemon.php';

$pokemon = unserialize($_SESSION['myPokemon']);
$history = $_SESSION['history'] ?? [];

// Menghapus inisialisasi $message = "";
$lvl_before = 0;
$hp_before = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $type = $_POST['type'];
    $intensity = (int)$_POST['intensity'];

    $lvl_before = $pokemon->getLevel();
    $hp_before = $pokemon->getHP();

    $pokemon->train($intensity);

    $_SESSION['myPokemon'] = serialize($pokemon);

    $history[] = [
        'time' => date("Y-m-d H:i:s"),
        'type' => $type,
        'intensity' => $intensity,
        'lvl_before' => $lvl_before,
        'lvl_after' => $pokemon->getLevel(),
        'hp_before' => $hp_before,
        'hp_after' => $pokemon->getHP()
    ];

    $_SESSION['history'] = $history;

    // TIDAK LAGI MENGGUNAKAN $message
    // Kita bisa menggunakan $type untuk memastikan ada data yang dikirim dan latihan berhasil
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Latihan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Latihan Pokémon</h2>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($type)): ?>
        <div class="success">
            <img src="assets/image.png" alt="pokemon-trained" class="pokemon-success-img" width="80">
            <div>
                <strong>Hasil Latihan</strong><br>
                Perubahan Level: <?php echo $lvl_before; ?> &rarr; <?php echo $pokemon->getLevel(); ?><br>
                Perubahan HP: <?php echo $hp_before; ?> &rarr; <?php echo $pokemon->getHP(); ?><br>
                Jurus Special: Aqua Jet! (Serangan tipe air yang diluncurkan dengan cepat seperti semburan gelembung, yang kadang dapat menurunkan kecepatan lawan.)
            </div>
        </div>
    <?php endif; ?>

    <form method="POST">
        <label>Jenis Latihan:</label>
        <select name="type">
            <option>Defense</option>
            <option>Speed</option>
            <option>Attack</option>
        </select>

        <label>Intensitas (1-5):</label>
        <input type="number" name="intensity" min="1" max="5" value="1" required>

        <button type="submit">Jalankan Simulasi Latihan</button>
    </form>

    <a href="index.php" class="nav-link">&laquo; Kembali ke Beranda</a>
    <a href="riwayat.php" class="nav-link nav-link-hist">Lihat Riwayat &raquo;</a>
</body>

</html>