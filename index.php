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
            <textarea name="choices" rows="10" cols="30" placeholder="Masukkan pilihan, pisahkan dengan baris baru..."></textarea><br>
            <input type="submit" value="Tampilkan Pilihan">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $choices = nl2br(htmlspecialchars($_POST['choices']));
            echo "<h2>Pilihan Anda:</h2>";
            echo "<div class='choices'>$choices</div>";
        }
        ?>
    </div>
</body>
</html>
