<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bini Official</title>

    <link rel="stylesheet" href="./css/style.css?v=<?php echo time();?>">

    <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.css">
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

    <div class="cart-section">
        <h2>My Cart</h2>
        <div class="cart-items">
            <!-- Cart Item 1 -->
            <div class="cart-item">
                <input type="checkbox" class="cart-checkbox" data-price="25.00" data-quantity="2" id="item1" style="margin: 0 15px 0 15px;">
                <div class="cart-item-image">
                    <img src="image/bucket-hat-bio-white.webp" alt="Product 1">
                </div>
                <div class="cart-item-details">
                    <h4>Product 1</h4>
                    <p>Price: ₱25.00</p>
                    <p>Quantity: 2</p>
                    <a href="#" class="remove-item">Remove</a>
                </div>
            </div>
            
            <!-- Cart Item 2 -->
            <div class="cart-item">
                <input type="checkbox" class="cart-checkbox" data-price="15.00" data-quantity="1" id="item2" style="margin: 0 15px 0 15px;">
                <div class="cart-item-image">
                    <img src="image/sweatshirt-black.webp" alt="Product 2">
                </div>
                <div class="cart-item-details">
                    <h4>Product 2</h4>
                    <p>Price: ₱15.00</p>
                    <p>Quantity: 1</p>
                    <a href="#" class="remove-item">Remove</a>
                </div>
            </div>
            
            <!-- Cart Item 3 -->
            <div class="cart-item">
                <input type="checkbox" class="cart-checkbox" data-price="40.00" data-quantity="1" id="item3" style="margin: 0 15px 0 15px;">
                <div class="cart-item-image">
                    <img src="image/t-shirt-faded-black.webp" alt="Product 3">
                </div>
                <div class="cart-item-details">
                    <h4>Product 3</h4>
                    <p>Price: ₱40.00</p>
                    <p>Quantity: 1</p>
                    <a href="#" class="remove-item">Remove</a>
                </div>
            </div>
        </div>

        <!-- Total Price -->
        <div class="cart-total">
            <h3>Total: ₱0.00</h3>
            <a href="checkout" class="checkout-btn" id="checkoutButton" style="display: none;">Proceed to Checkout</a>
        </div>
    </div>


</body>

<script>

document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.cart-checkbox');
    const totalPriceElement = document.querySelector('.cart-total h3');
    let totalAmount = 0;

    // Function to update the total price
    function updateTotalPrice() {
        totalAmount = 0;
        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                const price = parseFloat(checkbox.getAttribute('data-price'));
                const quantity = parseInt(checkbox.getAttribute('data-quantity'));
                totalAmount += price * quantity;
            }
        });
        totalPriceElement.textContent = 'Total: ₱' + totalAmount.toFixed(2);
    }

    // Add event listener for checkboxes to update total on change
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', updateTotalPrice);
    });

    // Initialize total price on page load
    updateTotalPrice();
});


</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.cart-checkbox');
    const checkoutButton = document.getElementById('checkoutButton');

    function updateButtonState() {
        const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        if (anyChecked) {
            checkoutButton.style.display = 'inline-block'; // Show the button
            checkoutButton.setAttribute('href', 'checkout'); // Allow navigation
        } else {
            checkoutButton.style.display = 'none'; // Hide the button
            checkoutButton.removeAttribute('href'); // Remove the link
        }
    }

    // Add event listeners to checkboxes
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateButtonState);
    });

    // Initialize the button state on page load
    updateButtonState();
});
</script>

<script src="./js/script.js"></script>
<script src="./bootstrap-4.5.3-dist/js/bootstrap.js"></script>

</html>