<?php
require_once './classes/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Form validation
    $errors = [];
    
    // Check if passwords match
    if ($password !== $cpassword) {
        $errors[] = "Passwords do not match.";
    }

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Proceed if no errors
    if (empty($errors)) {
        $db = new Database();
        $signupResult = $db->signupUser($firstname, $lastname, $email, $password);

        if ($signupResult === false) {
            $errors[] = "Error during sign-up. Please try again.";
        } elseif ($signupResult === "Email is already registered.") {
            $errors[] = "Email is already registered.";
        } else {
            header("Location: login.php"); // Redirect to login page after successful signup
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bini Official | Sign Up</title>

    <link rel="stylesheet" href="./css/login.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="/bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="login-container" style="width: 30rem;">
        <img src="image/BINI.png" alt="">
        <h1>Sign Up</h1>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form action="signup.php" method="POST">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" required>
            </div>
            <a href="login.php" style="text-decoration: none; color: black;">Already have an Account?</a>
            <button type="submit" class="btn">Join Now</button>
        </form>
    </div>

</body>

<script src="/js/script.js"></script>
<script src="/bootstrap-4.5.3-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</html>
