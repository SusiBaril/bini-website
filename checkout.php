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

    <div class="container-fluid">
        <div class="checkout-container">
            <h2 class="checkout-header">Checkout</h2>
            
            <form action="place_order.php" method="POST">
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Shipping Address</label>
                    <textarea name="address" id="address" class="form-control" placeholder="Enter your address" rows="3" required></textarea>
                </div>

                <!-- Order Summary -->
                <h5>Order Summary</h5>
                <div class="order-summary">
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Product 1 (x2)
                            <span id="product-price">₱50.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Product 2 (x1)
                            <span id="product-price">₱15.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Product 3 (x1)
                            <span id="product-price">₱40.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Total</strong>
                            <strong id="tota-price">₱105.00</strong>
                        </li>
                    </ul>
                </div>

                <!-- Payment Method -->
                <h5>Payment Method</h5>
                <div class="form-check mb-2">
                    <input type="radio" name="payment_method" value="paypal" id="paypal" class="form-check-input" required>
                    <label for="paypal" class="form-check-label">PayPal</label>
                </div>
                <div class="form-check mb-4">
                    <input type="radio" name="payment_method" value="cod" id="cod" class="form-check-input" required>
                    <label for="cod" class="form-check-label">Cash on Delivery</label>
                </div>

                <!-- Submit Button -->
                <div class="submit-btn">
                    <button type="submit" class="btn btn-custom btn-block">Place Order</button>
                </div>
            </form>
        </div>
    </div>


</body>

<script src="./js/script.js"></script>
<script src="./bootstrap-4.5.3-dist/js/bootstrap.js"></script>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</html>