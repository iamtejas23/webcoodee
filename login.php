<?php
session_start();
include('config.php');

// Check if the user is already logged in
if (isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

// Authenticate the admin user
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Add your authentication logic here (e.g., check credentials against a database)
    // For simplicity, a basic username/password check is shown below
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['admin'] = true;
        header('Location: admin.php');
        exit();
    } else {
        $error = 'Invalid credentials';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    text-align: center;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

input,
button {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    background-color: transparent;
    color: black;
    cursor: pointer;
    border: 2px solid ;
    border-radius:10px;
}

button:hover {
    background-color: #45a049;
}

p.error {
    color: red;
    text-align: center;
}

@media screen and (max-width: 600px) {
    form {
        max-width: 100%;
    }
}

    </style>
</head>

<body>
    <h1>Login</h1>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
</body>

</html>
