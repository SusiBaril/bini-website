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

<body>

    <?php include("navbar.php") ?>

    <div class="main-content">
        
        <div class="container-fluid">

            <div class="header">

                <div class="page-title">
                    <h2>Bini Merch</h2>
                    
                    <input type="search" placeholder="Search..." name="" id="">
                    
                </div>

                <div class="products">
                    <div class="card-container my-5">
                            <div class="card" style="border-radius: 10px; position: relative;"  onclick="window.location.href='product-view';">
                                <div class="card-body">
                                    <img src="./image/bucket-hat-bio-white.webp" alt="" class="card-img-top">
                                    <div class="card-titles">
                                        <h4 class="card-title"></h4>
                                        <h4 class="card-title">₱2,120</h4>
                                    </div>
                                    <a href="" class="card-text quick-view-btn" style="text-decoration: none;">Add to Basket</a>
                                </div>
                            </div>
                            <div class="card" style="border-radius: 10px; position: relative;">
                                <div class="card-body">
                                    <img src="./image/sweatshirt-black.webp" alt="" class="card-img-top">
                                    <div class="card-titles">
                                        <h4 class="card-title"></h4>
                                        <h4 class="card-title">₱3,830</h4>
                                    </div>
                                    <a href="" class="card-text quick-view-btn" style="text-decoration: none;">Add to Basket</a>
                                </div>
                            </div>
                            <div class="card" style="border-radius: 10px; position: relative;">
                                <div class="card-body">
                                    <img src="./image/t-shirt-faded-black.webp" alt="" class="card-img-top">
                                    <div class="card-titles">
                                        <h4 class="card-title"></h4>
                                        <h4 class="card-title">₱3,240</h4>
                                    </div>
                                    <a href="" class="card-text quick-view-btn" style="text-decoration: none;">Add to Basket</a>
                                </div>
                            </div>
                            <div class="card" style="border-radius: 10px; position: relative;">
                                <div class="card-body">
                                    <img src="./image/tote-bag-black.webp" alt="" class="card-img-top">
                                    <div class="card-titles">
                                        <h4 class="card-title"></h4>
                                        <h4 class="card-title">₱2,180</h4>
                                    </div>
                                    <a href="" class="card-text quick-view-btn" style="text-decoration: none;">Add to Basket</a>
                                </div>
                            </div>
                    </div>
                </div>
    

            </div>

        </div>

    </div>


</body>

<script src="/js/script.js"></script>
<script src="/bootstrap-4.5.3-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</html>