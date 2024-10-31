<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Fashion Wanita</title>
    <link rel="stylesheet" href="style.css"> <!-- Hubungkan CSS eksternal -->
</head>
<body>

<?php
// Memasukkan semua file dari namespace Application
include_once 'namespaces/Application.php';

use Application\Classes\Fashion;

// Membuat objek Fashion dengan gambar
$produk1 = new Fashion("Oneset Blouse", 400000, "M", "Pink", "oneset blouse.jpg");
$produk2 = new Fashion("Oneset Kemeja", 350000, "L", "Blue", "oneset kemeja.jpg");
$produk3 = new Fashion("Oneset Cardigan", 350000, "S", "Cream", "oneset cardigan.jpg"); 

// Output ke halaman web
echo "<h1>Daftar Produk Fashion Wanita</h1>";
echo "<div class='product-container'>";

echo "<div class='product-box'>";
echo "<h2>Produk 1</h2>";
echo "<img src='{$produk1->getGambar()}' alt='{$produk1->getNama()}' width='150'><br>";
echo $produk1->showInfo() . "<br>";
echo $produk1 . "<br>";
echo "</div>";

echo "<div class='product-box'>";
echo "<h2>Produk 2</h2>";
echo "<img src='{$produk2->getGambar()}' alt='{$produk2->getNama()}' width='150'><br>";
echo $produk2->showInfo() . "<br>";
echo $produk2 . "<br>";
echo "</div>";

echo "<div class='product-box'>";
echo "<h2>Produk 3</h2>";
echo "<img src='{$produk3->getGambar()}' alt='{$produk3->getNama()}' width='150'><br>";
echo $produk3->showInfo() . "<br>";
echo $produk3 . "<br>";
echo "</div>";

echo "</div>"; // Tutup div container
?>

</body>
</html>
