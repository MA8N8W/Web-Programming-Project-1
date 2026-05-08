<?php
require 'db.php';

    unset($name);
    unset($email);
    unset($content);

    if(isset($_SESSION['id'])) {
        //User form
        if(isset($_POST['content'])) {
            if(trim($_POST['content']) != "") {
                $mst = $pdo->prepare("INSERT INTO messages(user_id, message) VALUES(:id, :content)");
                $mst->execute(
                    array(
                        ':id' => $_SESSION['id'],
                        ':content' => trim($_POST['content']),
                    )
                );
                return;
            }
            else {
                $submitmessage = "<p>A couple of spaces are not a valid message.</p>";
                return;
            }
        }
        else {
            $submitmessage = "<p>Message has no content.</p>";
            return;
        }
    }
    else {
        //Guest form
        if($_POST['content'] != "") {
            if ($_POST['name'] != "") {
                if(mb_strlen(trim($_POST['name'])) > 5) {
                    $name = trim($_POST['name']);
                }
                else {
                    $submitmessage = "<p>Name is too short.</p><br/>";
                    return;
                }
            }

            if ($_POST['email'] != "") {
                $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{1,4})$/';
                if(preg_match($re,$_POST['email'])) {
                    $email = trim($_POST['email']);
                }
                else {
                    $submitmessage = "<p>Email Address format is invalid.</p><br/>";
                    return;
                }
            }

            if(mb_strlen(trim($_POST['content'])) != 0) {
                $content = trim($_POST['content']);
                try {
                    $mst = $pdo->prepare("INSERT INTO messages(user_id, guest_name, guest_email, message) VALUES(0, :guestname, :guestemail, :content)");
                    $mst->execute(
                        array(
                            ':guestname' => isset($name) ? $name : null,
                            ':guestemail' => isset($email) ? $email : null,
                            ':content' => $content,
                        )
                    );
                }
                catch (PDOException $e) {
                    $submitmessage = $e->getMessage();
                }
                return;
            }
            else {
                $submitmessage = "<p>A couple of spaces are not a valid message.</p>";
                return;
            }
        }
        else {
            $submitmessage = "<p>Message has no content.</p>";
            return;
        }
    }
?>
