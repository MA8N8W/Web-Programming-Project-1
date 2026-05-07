<?php
require 'db.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
    try {
        //$pdo->query('SET NAMES utf8 COLLATE utf8_general_ci');
        //$pdo->query('SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci');
        $sth = $pdo->prepare("select * from users where UPPER(user_name) = UPPER(:username)");
        $sth->execute(array(':username' => trim($_POST['username'])));
        $USER = $sth->fetch(PDO::FETCH_ASSOC);
        if($USER && password_verify($_POST['password'], $USER['PASSWORD'])) {
            $_SESSION['id'] = htmlspecialchars($USER['ID']);
            $_SESSION['admin'] = htmlspecialchars($USER['IS_ADMIN']);
            $_SESSION['userName'] = htmlspecialchars($USER['USER_NAME']);
            $_SESSION['email'] = htmlspecialchars($USER['EMAIL_ADDRESS']);
            $_SESSION['firstName'] = htmlspecialchars($USER['FIRST_NAME']);
            $_SESSION['middleName'] = htmlspecialchars($USER['MIDDLE_NAME']);
            $_SESSION['lastName'] = htmlspecialchars($USER['LAST_NAME']);
            $_SESSION['birthDate'] = $USER['BIRTH_DATE'];
            $_SESSION['joinDate'] = $USER['JOIN_DATE'];
        }
        else {
            unset($USER);
        }
    }
    catch (PDOException $e) {
        $errormessage = "Error: ".$e->getMessage(); //Doesn't ever seem to do anything.
    }
}
else {
    header("Location: .");
}
?>
