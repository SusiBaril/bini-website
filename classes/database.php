<?php 

date_default_timezone_set('Asia/Manila');

class database{

    function opencon(){
        return new PDO('mysql:host=localhost;dbname=bini','root','');
    }

    function signupUser($firstname, $lastname, $email, $password) {
        $con = $this->opencon();
        try {
            $stmt = $con->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$firstname, $lastname, $email, password_hash($password, PASSWORD_DEFAULT)]);
    
            return $con->lastInsertId(); 
        } catch (PDOException $e) {
            error_log("Error in signupUser: " . $e->getMessage());
            return false;
        }
    }

    function check($email, $password) {
        // Open database connection
        $con = $this->opencon();
    
        // Prepare the SQL query
        $stmt = $con->prepare("SELECT * FROM users WHERE email= ?");
        $stmt->execute([$email]);
    
        // Fetch the user data as an associative array
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // If a user is found, verify the password
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
    
        // If no user is found or password is incorrect, return false
        return false;
    }

    function checkEmail($email) {
        $con = $this->opencon();
        $stmt = $con->prepare("SELECT email FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result !== false) {
            // Email found in the database
            return true;
        } else {
            // Email not found in the database
            return false;
        }
    }

}