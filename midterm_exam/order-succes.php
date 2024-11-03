<?php
session_start();
require_once 'core/dbConfig.php'; 
require_once 'core/models.php';
require_once 'core/handleForms.php'; 

if(!isset($_SESSION['user_id']) || (time() - $_SESSION['last_activity'] > 1800)) {
    session_destroy();
    header("Location: login.php");
    exit();
}
$_SESSION['last_activity'] = time();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Order Placed Successfully!</h1>
    <p>Thank you for ordering from our bookstore. Your order has been placed successfully.</p>
    <a href="index.php">← Back to Books</a>
</body>
</html>