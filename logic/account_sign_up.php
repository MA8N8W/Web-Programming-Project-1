<?php
require 'db.php';

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordcheck'])) {
    try {
        //Check if password fields are equal to one-another
        if ($_POST['password'] === $_POST['passwordcheck']) {

            // Check if email already exists
            $chst1 = $pdo->prepare("SELECT id FROM users WHERE email_address = :email");
            $chst1->execute(array(':email' => trim($_POST['email'])));
            if($row = $chst1->fetch(PDO::FETCH_ASSOC)) {
                $message = "The email adddress is already in use.";
                $again = "true";
            }
            else {
                // Check if username already exists
                $chst2 = $pdo->prepare("SELECT id FROM users WHERE user_name = :username");
                $chst2->execute(array(':username' => trim($_POST['username'])));
                if($row = $chst2->fetch(PDO::FETCH_ASSOC)) {
                    $message = "The user name is already in use.";
                    $again = "true";
                }
                else {

                    // If previous checks all passed, register new account
                    $stmt = $pdo->prepare("INSERT INTO users(id, is_admin, user_name, email_address, password, first_name, middle_name, last_name, birth_date) VALUES(null, 0, :username, :email, :password, :firstname, :middlename, :lastname, :birthdate)");
                    $stmt->execute(
                        array(
                            ':username' => trim($_POST['username']),
                            ':email' => trim($_POST['email']),
                            ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                            ':firstname' => trim($_POST['firstname']),
                            ':middlename' => trim($_POST['middlename']),
                            ':lastname' => trim($_POST['lastname']),
                            ':birthdate' => trim($_POST['birthdate'])
                        )
                    );
                    if($count = $stmt->rowCount()) {
                        $newid = $pdo->lastInsertId();
                        $message = "Registration successful.";
                        $again = false;
                    }
                    else {
                        $message = "Registration failed.";
                        $again = true;
                    }
                }
            }
        }
        else {
            $message = "Passwords do not match";
            $again = true;
        }
    }
    catch (PDOException $e) {
        $message = "Error: ".$e->getMessage();
        $again = true;
    }      
}
else {
    header("Location: .");
}
?>