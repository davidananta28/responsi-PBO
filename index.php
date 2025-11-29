<?php
session_start();
require 'pokemon.php';

if (!isset($_SESSION['myPokemon'])) {
    header("Location: reset.php");
    exit;
}

$pokemon = unserialize($_SESSION['myPokemon']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>PokéCare - Research & Training Center</h2>
    <img src="assets/International_Pokémon_logo.svg.png" alt="logo-pokemon">
    <div class=" card">
        <div class="pokemon-avatar">
            <img src="assets/image.png"
                alt="pokemon" class="pokemon-img" width="200">
        </div>

        <div class="card-info">
            <h3>Informasi Dasar Pokémon</h3>

            <table>
                <tr>
                    <td><strong>Nama:</strong></td>
                    <td><?= $pokemon->getName(); ?></td>
                </tr>
                <tr>
                    <td><strong>Tipe:</strong></td>
                    <td><?= $pokemon->getType(); ?></td>
                </tr>
                <tr>
                    <td><strong>Level:</strong></td>
                    <td><?= $pokemon->getLevel(); ?></td>
                </tr>
                <tr>
                    <td><strong>HP:</strong></td>
                    <td><?= $pokemon->getHP(); ?></td>
                </tr>
                <tr>
                    <td><strong>Jurus Spesial:</strong></td>
                    <td><i><?= $pokemon->specialMove(); ?></i></td>
                </tr>
            </table>

            <div style="margin-top: 20px;">
                <a href="latihan.php" class="btn">Mulai Latihan</a>
                <a href="riwayat.php" class="btn btn-hist">Riwayat Latihan</a>
            </div>
        </div>
    </div>

</body>

</html>