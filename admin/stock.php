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
        <section class="stocks">
            <div class="titles">
                <h1>Stocks</h1>
            </div>

            <div class="container-fluid">

                <div class="stock-header">

                    <div class="search-bar">
                        <input type="search" placeholder="Search..." class="search" id="">
                    </div>
    
                    <button><a href="add-product.php">Add Product</a></button>

                </div>

                <div class="box">
                    
                    <table class="table" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Quantity Available</th>
                                <th>Price</th>
                                <th>Date Added</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#001</td>
                                <td>Product A</td>
                                <td>Category 1</td>
                                <td>100</td>
                                <td>₱500.00</td>
                                <td>2024-11-20</td>
                                <td>
                                    <div class="drop-menus">
                                        <!-- Dropdown button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="edit-product.html" style="font-size:15px;">Edit</a></li>
                                                <li><a class="dropdown-item" href="#" style="font-size:15px;">Delist</a></li>
                                                <li><a class="dropdown-item" href="#" style="font-size:15px;">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </section>
    </div>

</body>

<script src="./js/script.js"></script>
<script src="../bootstrap-4.5.3-dist/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>