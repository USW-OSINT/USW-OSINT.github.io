<?php
// Start session
session_start();

// Hardcoded credentials
define('USERNAME', 'admin');
define('PASSWORD', 'password123');

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === USERNAME && $password === PASSWORD) {
        // Successful login, set session variable
        $_SESSION['loggedin'] = true;
        header('Location: success.php'); // Redirect to success page
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Logistics</title>
    <link rel="stylesheet" href="/DHL/style.css">
    <style>
        /* Additional styling for the login page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .login-container h1 {
            margin-bottom: 1.5rem;
            color: #0057b8;
        }

        .login-container input {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-container button {
            width: 100%;
            padding: 0.8rem;
            background: #0057b8;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .login-container button:hover {
            background: #004090;
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: 1rem;
            display: none;
        }
    </style>
</head>
<body>
<form method="POST" action="">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>

    <script>
        // Hardcoded credentials
        const VALID_USERNAME = "admin";
        const VALID_PASSWORD = "password123";

        function handleLogin() {
            // Get values from input fields
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Check if credentials match
            if (username === VALID_USERNAME && password === VALID_PASSWORD) {
                window.location.href = "/DHL/success.html"; // Redirect to success page
            } else {
                const errorMessage = document.getElementById("error-message");
                errorMessage.style.display = "block";
            }
        }
    </script>
</body>
</html>