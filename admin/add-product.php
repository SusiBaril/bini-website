<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bini Official | Admin</title>

    <link rel="stylesheet" href="./css/style.css?v=<?php echo time();?>">

    <link rel="stylesheet" href="../bootstrap-4.5.3-dist/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

<?php include("nav.php") ?>

<div class="main-content">

<section class="add-product">

    <div class="container-fluid">

        <div class="back">
            <a href="stock"><i class='bx bx-arrow-back' ></i></a>
        </div>

        <form action="#" method="POST" class="add-product-form">
        <div class="add-prod">

            <div class="image-view">

                <div class="add-img">
                    <label for="file-upload">
                        <img class="imgupload" src="../image/upload.png" alt="Click to upload" id="preview" style="width: 100%; height: auto;">
                    </label>
                    <input id="file-upload" type="file" name="productImage" accept="image/*" style="display:none;">
                </div>     

                <div class="image-gallery">



                </div>
                
            </div>

            <div class="add-product-forms">

                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" id="productName" name="productName" placeholder="Enter product name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" id="price" name="price" placeholder="Enter price" step="0.01" required>
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn" style="border: 1px solid black; width: 150px;">Add Product</button>
                    </div>
            </div>

        </div>
        </form>
        
    </div>

</section>

</div>


</body>

<script src="./js/script.js"></script>
<script src="../bootstrap-4.5.3-dist/js/bootstrap.js"></script>

</html>