<?php // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']); // Adjust 'user_id' to the appropriate session variable used for authentication
?>

<nav>
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="image/BINI.png" alt=""></a>
            </div>
            <div class="navbar-lists">
                <ul class="navbar-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="basket.php">Basket</a></li>
                    <?php if ($isLoggedIn): ?>
                        <li><a href="logout.php">Logout</a></li>
                        <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                        <?php endif; ?>
                    </div>
                </ul>
            </div>
        </div>
    </nav>