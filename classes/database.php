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

}