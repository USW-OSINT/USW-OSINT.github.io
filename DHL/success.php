<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html'); // Redirect to login page
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
    <link rel="stylesheet" href="/DHL/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .success-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .success-container h1 {
            color: #0057b8;
            margin-bottom: 1rem;
        }

        .success-container p {
            margin-bottom: 2rem;
        }

        .success-container a {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background: #0057b8;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .success-container a:hover {
            background: #004090;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <h1>Welcome Back!</h1>
        <p>Login successful. Click the button below to view your orders.</p>
        <a href="/DHL/orders.html">Orders</a>
    </div>
</body>
</html>