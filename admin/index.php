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
        
            <div class="titles">
                <h1>Dashboard</h1>
            </div>

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-4">

                    <div class="box">

                        <h2>Sales</h2>
                        <h1>₱100.00</h1>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="box">

                        <h2>Customers</h2>
                        <h1>20</h1>
                        
                    </div>
                
                </div>

                <div class="col-md-4">

                    <div class="box">

                        <h2>Orders</h2>
                        <h1>5</h1>
                        
                    </div>
                
                </div>

            </div>

            <div class="row">

            <div class="col-md-6">
                <div class="box">
                    <div class="transaction">
                        <h3>Transaction Details</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Payer Email</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#12345</td>
                                    <td>example@example.com</td>
                                    <td>$100.00</td>
                                    <td>Completed</td>
                                    <td>2024-11-27</td>
                                </tr>
                                <tr>
                                    <td>#12346</td>
                                    <td>another@example.com</td>
                                    <td>$50.00</td>
                                    <td>Pending</td>
                                    <td>2024-11-28</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box">
                    <div class="orders">
                        <h3>Order Details</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#A123</td>
                                    <td>John Doe</td>
                                    <td>T-Shirt</td>
                                    <td>2</td>
                                    <td>$40.00</td>
                                    <td>Shipped</td>
                                </tr>
                                <tr>
                                    <td>#B234</td>
                                    <td>Jane Smith</td>
                                    <td>Jeans</td>
                                    <td>1</td>
                                    <td>$30.00</td>
                                    <td>Processing</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            </div>

        </div>


    </div>

</body>

<script src="./js/script.js"></script>
<script src="../bootstrap-4.5.3-dist/js/bootstrap.js"></script>

</html>