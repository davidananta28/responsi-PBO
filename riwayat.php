<?php
session_start();
require 'pokemon.php';

$pokemon = unserialize($_SESSION['myPokemon']);
$history = $_SESSION['history'] ?? [];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Riwayat Latihan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Log Aktivitas Pelatihan</h2>
    <a href="index.php" class="nav-link">&laquo; Kembali ke Dashboard</a>

    <table>
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Jenis Latihan</th>
                <th>Intensitas</th>
                <th>Level (Awal -> Akhir)</th>
                <th>HP (Awal -> Akhir)</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($history)): ?>
                <tr>
                    <td colspan="5" style="text-align:center">Belum ada data latihan.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($history as $row): ?>
                    <tr>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['intensity']; ?></td>
                        <td><?php echo $row['lvl_before'] . " → " . $row['lvl_after']; ?></td>
                        <td><?php echo $row['hp_before'] . " → " . $row['hp_after']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>