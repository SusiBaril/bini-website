<?php
require_once './classes/database.php';

$con = new database();
session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['signup'])) {
        // Sanitize input
        $firstname = htmlspecialchars(trim($_POST['firstname']));
        $lastname = htmlspecialchars(trim($_POST['lastname']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['cpassword']);

        // Validate input
        if (empty($firstname) || empty($lastname)) {
            $errors[] = "First and last name are required.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if ($con->checkEmail($email)) { // Assume this method checks email uniqueness
            $errors[] = "This email is already registered.";
        }

        if (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters long.";
        }

        if ($password !== $confirmPassword) {
            $errors[] = "Passwords do not match.";
        }

        // Proceed if no validation errors
        if (empty($errors)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $user_id = $con->signupUser($firstname, $lastname, $email, $hashedPassword);
            if ($user_id) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['first_name'] = $firstname;
                $_SESSION['user_email'] = $email;
                $_SESSION['account_type'] = 2; // Default account type for new users
                header('location:address.php');
                exit();
            } else {
                $errors[] = "An error occurred while creating the account.";
            }
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
    <link rel="stylesheet" href="./css/login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/bootstrap-4.5.3-dist/css/bootstrap.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="login-container" style="width: 30rem;">
        <img src="image/BINI.png" alt="BINI Logo">
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
                <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($_POST['firstname'] ?? ''); ?>" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($_POST['lastname'] ?? ''); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
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
            <button type="submit" name="signup" class="btn">Join Now</button>
        </form>
    </div>
</body>
<script src="/js/script.js"></script>
<script src="/bootstrap-4.5.3-dist/js/bootstrap.js"></script>
</html>
