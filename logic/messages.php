<?php
require 'db.php';

$stmt = $pdo->prepare('SELECT u.id, u.is_admin, u.user_name, u.email_address, m.post_timestamp, m.guest_name, m.guest_email, m.message FROM messages m JOIN users u ON m.user_id = u.id ORDER BY m.post_timestamp DESC');
$stmt->execute();
