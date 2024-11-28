<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Tampilkan produk
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Manage Products</title>
</head>
<body>
    <h1>Welcome, Admin!</h1>
    <a href="create_product.php">Add New Product</a>

    <!-- Tampilkan daftar produk -->
    <div id="product-list">
        <!-- Produk akan ditampilkan di sini dengan menggunakan API -->
    </div>
</body>
</html>
