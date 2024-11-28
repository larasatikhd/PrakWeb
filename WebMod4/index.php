<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksesoris Wanita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Aksesoris Wanita</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="login/signin.php">Sign In</a></li>
            <li><a href="login/signup.php">Sign Up</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main id="home">
        <!-- Hero Section -->
        <section class="hero">
            <h1>Elegance Redefined</h1>
            <p>Discover our exclusive collection of women's accessories.</p>
            <button onclick="alert('Shop Now Coming Soon!')">Shop Now</button>
        </section>

        <!-- Products Section -->
        <section id="products" class="products">
            <h2>Our Products</h2>
            <div class="product-grid" id="product-grid">
                <!-- Produk akan ditampilkan di sini -->
            </div>
        </section>

        <!-- About Section -->
        <section id="about">
            <h2>About Us</h2>
            <p>We create beautiful accessories to enhance every woman's style, offering unique and high-quality designs, ensuring each accessory has its own beauty.</p>
            </div>

            <!-- Best Seller -->
            <div class="best-seller">
                <h3>Little Wonders</h3>
                <div class="best-sellers">
                    <div class="product">
                        <img src="images/bandana.jpg" alt="Bandana" />
                        <p>Bandana</p>
                        <p>$35.00</p>
                    </div>
                    <div class="product">
                        <img src="images/jepit.jpg" alt="Hairpin" />
                        <p>Hairpin</p>
                        <p>$50.00</p>
                    </div>
                    <div class="product">
                        <img src="images/bando.jpg" alt="Bando" />
                        <p>Bando</p>
                        <p>$40.00</p>
                    </div>
                    <div class="product">
                        <img src="images/gantungan2.jpg" alt="Keychain" />
                        <p>Keychain</p>
                        <p>$45.00</p>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="testimonials">
                <h3>Customer Testimonials</h3>
                <div class="testimonial-box">
                    <p>"I absolutely love the unique designs and high quality of the accessories. They make me feel so confident!" – Aurora Belle</p>
                    <p>"The bracelet I bought is stunning! It matches everything I wear, and the quality is amazing." – Snow White</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="contact-us">
            <h3>Contact Us</h3>
            <p>Email: <a href="mailto:info@aksesoriswanita.com">info@aksesoriswanita.com</a></p>
        </div>
        <div class="social-media">
            <h3>Follow Us</h3>
            <a href="#">Instagram</a> | <a href="#">Facebook</a> | <a href="#">Twitter</a>
        </div>
        <p class="copyright">© 2024 Aksesoris Wanita. All Rights Reserved.</p>
    </footer>

    <script src="assets/js/script.js"></script>
    <script>
        
        // Fetch products from the API
        fetch('api/get_products.php')
            .then(response => response.json())
            .then(products => {
                const productGrid = document.getElementById('product-grid');
                products.forEach(product => {
                    const productCard = `
                        <div class='product-card'>
                            <img src='${ product.image_url}' alt='${product.name}'>
                            <h3>${product.name}</h3>
                            <p>Price: $${product.price}</p>
                            <p>${product.description}</p>
                        </div>
                    `;
                    productGrid.innerHTML += productCard;
                });
            })
            .catch(error => console.error('Error fetching products:', error));
    </script>
</body>
</html>