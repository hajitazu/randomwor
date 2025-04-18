<?php
session_start(); // Memulai sesi

// Jika form disubmit, simpan pilihan ke dalam sesi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['choices'] = trim($_POST['choices']);
}

// Ambil pilihan dari sesi jika ada
$choices = isset($_SESSION['choices']) ? $_SESSION['choices'] : '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pilih Pilihan</title>
</head>
<body>
    <div class="container">
        <h1>Pilih Pilihan Anda</h1>
        <form method="POST" action="">
            <textarea name="choices" rows="10" cols="30" placeholder="Masukkan pilihan, pisahkan dengan baris baru..."><?php echo htmlspecialchars($choices); ?></textarea><br>
            <input type="submit" value="Simpan Pilihan">
        </form>

        <?php
        if (!empty($choices)) {
            $choicesArray = explode("\n", $choices);
            echo "<h2>Daftar Pilihan Anda:</h2>";
            echo "<ul>";
            foreach ($choicesArray as $choice) {
                echo "<li>" . htmlspecialchars($choice) . "</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
