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

        <div class="container-fluid">

            <div class="row">

            <div class="col-md-12">
                <div class="box">
                    <div class="orders">
                        <h3>Order Details</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1001</td>
                                    <td>John Doe</td>
                                    <td>$200.00</td>
                                    <td>Pending</td>
                                    <td>2024-11-27</td>
                                    <td>
                                        <!-- Dropdown for Accept/Cancel -->
                                        <select>
                                            <option value="pending" selected>Pending</option>
                                            <option value="accepted">Accept</option>
                                            <option value="cancelled">Cancel</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1002</td>
                                    <td>Jane Smith</td>
                                    <td>$150.00</td>
                                    <td>Pending</td>
                                    <td>2024-11-26</td>
                                    <td>
                                        <!-- Dropdown for Accept/Cancel -->
                                        <select>
                                            <option value="pending" selected>Pending</option>
                                            <option value="accepted">Accept</option>
                                            <option value="cancelled">Cancel</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1003</td>
                                    <td>Mike Johnson</td>
                                    <td>$50.00</td>
                                    <td>Pending</td>
                                    <td>2024-11-25</td>
                                    <td>
                                        <!-- Dropdown for Accept/Cancel -->
                                        <select>
                                            <option value="pending" selected>Pending</option>
                                            <option value="accepted">Accept</option>
                                            <option value="cancelled">Cancel</option>
                                        </select>
                                    </td>
                                </tr>
                                <!-- Additional rows as needed -->
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