<?php
session_start();
require_once './classes/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Form validation
    if (empty($username) || empty($password)) {
        $error = "Both fields are required.";
    } else {
        $db = new Database();
        $con = $db->opencon();

        if ($con) {
            // Check if the user exists
            $stmt = $con->prepare("SELECT id, first_name, last_name, email, password FROM users WHERE email = ? OR first_name = ?");
            $stmt->execute([$username, $username]);
            
            if ($stmt->rowCount() == 1) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Start session and store user data
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['first_name'] = $user['first_name'];
                    $_SESSION['last_name'] = $user['last_name'];
                    $_SESSION['email'] = $user['email'];
                    
                    // Redirect to dashboard or home page
                    header("Location: index.php");
                    exit;
                } else {
                    $error = "Invalid password.";
                }
            } else {
                $error = "User not found.";
            }
        } else {
            $error = "Error connecting to the database.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bini Official | Login</title>

    <link rel="stylesheet" href="./css/login.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="/bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="login-container">
        <a href="index.html"><img src="image/BINI.png" alt=""></a>
        <h1>Login</h1>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username or Email</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <a href="signup.php" style="text-decoration: none; color: black;">Don't have an Account?</a>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>

</body>

<script src="/js/script.js"></script>
<script src="/bootstrap-4.5.3-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</html>
