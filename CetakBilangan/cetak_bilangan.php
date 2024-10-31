<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak Bilangan</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
    <h2>Masukkan Bilangan Bulat Positif</h2>
    <form method="POST" action="">
        <label for="number">Masukkan nilai n:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">Cetak</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n = intval($_POST['number']);
        
        function cetakBilangan($n) {
            // Memeriksa apakah n adalah bilangan bulat positif
            if ($n <= 0) {
                echo "Masukkan bilangan bulat positif!";
                return;
            }

            // Perulangan dari 1 hingga n
            echo "<h3>Hasil Cetak:</h3>";
            echo "<div class='result-box'>"; // Kotak untuk hasil
            for ($i = 1; $i <= $n; $i++) {
                // Memeriksa kondisi-kondisi yang diberikan
                if ($i % 4 == 0 && $i % 6 == 0) {
                    echo "Pemrograman Website 2024<br>";
                } elseif ($i % 5 == 0) {
                    echo "2024<br>";
                } elseif ($i % 4 == 0) {
                    echo "Pemrograman<br>";
                } elseif ($i % 6 == 0) {
                    echo "Website<br>";
                } else {
                    echo $i . "<br>";
                }
            }
            echo "</div>"; // Penutup kotak hasil
        }

        // Memanggil fungsi cetakBilangan dengan input dari form
        cetakBilangan($n);
    }
    ?>
</body>
</html>
