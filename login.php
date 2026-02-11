<?php 
include 'db_connect.php'; 
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    if ($email && $password) {
        $stmt = $conn->prepare('SELECT id, name, password FROM users WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $name, $hash);
            $stmt->fetch();
            if (password_verify($password, $hash)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $name;
                header('Location: menu.php');
                exit();
            } else {
                $error = 'Invalid email or password.';
            }
        } else {
            $error = 'Invalid email or password.';
        }
        $stmt->close();
    } else {
        $error = 'Please fill in all fields.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .form-container { max-width: 400px; margin: 60px auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .form-container h2 { text-align: center; color: #C05000; margin-bottom: 20px; }
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; margin-bottom: 6px; color: #3E2723; }
        .form-group input { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        .form-group .error { color: #d32f2f; font-size: 13px; margin-top: 3px; }
        .btn { width: 100%; padding: 12px; background: #C05000; color: #fff; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; transition: background 0.3s; }
        .btn:hover { background: #FFB84D; color: #3E2723; }
        .switch-link { display: block; text-align: center; margin-top: 15px; color: #C05000; text-decoration: none; }
    </style>
</head>
<body>
    <div class="form-container">
        <?php if ($error): ?>
            <div style="color:#d32f2f; text-align:center; margin-bottom:15px;"> <?= $error ?> </div>
        <?php endif; ?>
        <h2>Login</h2>
        <form id="loginForm" action="#" method="post" onsubmit="return validateLogin()">
            <div class="form-group">
                <label for="loginEmail">Email</label>
                <input type="email" id="loginEmail" name="email" required>
                <div class="error" id="loginEmailError"></div>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="password" required>
                <div class="error" id="loginPasswordError"></div>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <a href="register.php" class="switch-link">Don't have an account? Register</a>
    </div>
    <script>
    function validateLogin() {
        let valid = true;
        const email = document.getElementById('loginEmail').value.trim();
        const password = document.getElementById('loginPassword').value.trim();
        document.getElementById('loginEmailError').textContent = '';
        document.getElementById('loginPasswordError').textContent = '';
        if (!email) {
            document.getElementById('loginEmailError').textContent = 'Email is required.';
            valid = false;
        } else if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
            document.getElementById('loginEmailError').textContent = 'Enter a valid email.';
            valid = false;
        }
        if (!password) {
            document.getElementById('loginPasswordError').textContent = 'Password is required.';
            valid = false;
        }
        return valid;
    }
    </script>
</body>
</html>
