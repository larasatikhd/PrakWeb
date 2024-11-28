<?php
include_once('db_config.php'); 

// Mendapatkan method dari request
$method = $_SERVER['REQUEST_METHOD'];

// Mengatur header untuk JSON
header('Content-Type: application/json');

switch ($method) {
    case 'POST':
        // Create Product
        $data = json_decode(file_get_contents('php://input'), true);
        $name = $data['name'];
        $price = $data['price'];
        $description = $data['description'];
        $image_url = $data['image_url'];

        $sql = "INSERT INTO products (name, price, description, image_url) VALUES ('$name', '$price', '$description', '$image_url')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "New product created successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    case 'GET':
        // Read Products
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        $products = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
            echo json_encode($products);
        } else {
            echo json_encode([]);
        }
        break;

    case 'PUT':
        // Update Product
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
        $name = $data['name'];
        $price = $data['price'];
        $description = $data['description'];
        $image_url = $data['image_url'];

        $sql = "UPDATE products SET name='$name', price='$price', description='$description', image_url='$image_url' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Product updated successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    case 'DELETE':
        // Delete Product
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];

        $sql = "DELETE FROM products WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Product deleted successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    default:
        echo json_encode(["error" => "Invalid request method"]);
        break;
}

$conn->close();
?>