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
            <textarea name="choices" rows="10" cols="30" placeholder="Masukkan pilihan, pisahkan dengan baris baru..."></textarea><br>
            <input type="submit" value="Pilih Acak">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $choices = explode("\n", trim($_POST['choices']));
            $randomChoice = $choices[array_rand($choices)];
            echo "<h2>Pilihan Acak Anda:</h2>";
            echo "<div class='choice'>$randomChoice</div>";
        }
        ?>
    </div>
</body>
</html>
