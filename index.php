<?php
session_start(); // Memulai sesi

// Jika form disubmit, simpan pilihan ke dalam sesi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['choices'] = trim($_POST['choices']);
}

// Ambil pilihan dari sesi jika ada
$choices = isset($_SESSION['choices']) ? $_SESSION['choices'] : '';

// Pilihan acak
$randomChoice = '';
if (!empty($choices)) {
    $choicesArray = explode("\n", $choices);
    $randomChoice = $choicesArray[array_rand($choicesArray)];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pilih Acak</title>
</head>
<body>
    <div class="container">
        <h1>Pilih Acak dari Pilihan Anda</h1>
        <form method="POST" action="">
            <textarea name="choices" rows="10" cols="30" placeholder="Masukkan pilihan, pisahkan dengan baris baru..."><?php echo htmlspecialchars($choices); ?></textarea><br>
            <input type="submit" value="Pilih Acak">
        </form>

        <?php if ($randomChoice): ?>
            <h2>Pilihan Acak Anda:</h2>
            <div class="choice"><?php echo htmlspecialchars($randomChoice); ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
