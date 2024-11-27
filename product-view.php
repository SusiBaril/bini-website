<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bini Official</title>

    <link rel="stylesheet" href="./css/style.css?v=<?php echo time();?>">

    <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<style>

body {
    background-image: url('./image/pagegb.jpg'); /* Replace with your image path */
    background-size: cover; /* Ensures the image covers the entire body */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    height: 100vh; /* Ensures the body takes up the full height of the viewport */
    margin: 0;
}

</style>

<body>

    <?php include("navbar.php") ?>

    <div class="product-container">
        <div class="product-image">
            <img src="image/sweatshirt-black.webp" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-name">Product Name</h2>
            <p class="product-price">₱50.00</p>
            <div class="quantity-selector">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" min="1" max="10" value="1">
            </div>
            <button class="add-to-cart-btn">Add to Cart</button>
        </div>
    </div>

</body>

<script src="./js/script.js"></script>
<script src="./bootstrap-4.5.3-dist/js/bootstrap.js"></script>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</html>