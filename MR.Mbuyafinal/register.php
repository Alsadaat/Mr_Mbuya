<?php 
include 'db_connect.php'; 
$success = $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm'] ?? '';
    if ($name && $email && $password && $confirm) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Invalid email address.';
        } elseif ($password !== $confirm) {
            $error = 'Passwords do not match.';
        } elseif (strlen($password) < 6) {
            $error = 'Password must be at least 6 characters.';
        } else {
            $stmt = $conn->prepare('SELECT id FROM users WHERE email = ?');
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $error = 'Email already registered.';
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
                $stmt->bind_param('sss', $name, $email, $hash);
                if ($stmt->execute()) {
                    $success = 'Registration successful! You can now <a href="login.php">login</a>.';
                } else {
                    $error = 'Registration failed. Please try again.';
                }
            }
            $stmt->close();
        }
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
    <title>Register</title>
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
        <?php if ($success): ?>
            <div style="color:green; text-align:center; margin-bottom:15px;"> <?= $success ?> </div>
        <?php elseif ($error): ?>
            <div style="color:#d32f2f; text-align:center; margin-bottom:15px;"> <?= $error ?> </div>
        <?php endif; ?>
        <h2>Register</h2>
        <form id="registerForm" action="#" method="post" onsubmit="return validateRegister()">
            <div class="form-group">
                <label for="regName">Full Name</label>
                <input type="text" id="regName" name="name" required>
                <div class="error" id="regNameError"></div>
            </div>
            <div class="form-group">
                <label for="regEmail">Email</label>
                <input type="email" id="regEmail" name="email" required>
                <div class="error" id="regEmailError"></div>
            </div>
            <div class="form-group">
                <label for="regPassword">Password</label>
                <input type="password" id="regPassword" name="password" required>
                <div class="error" id="regPasswordError"></div>
            </div>
            <div class="form-group">
                <label for="regConfirm">Confirm Password</label>
                <input type="password" id="regConfirm" name="confirm" required>
                <div class="error" id="regConfirmError"></div>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        <a href="login.php" class="switch-link">Already have an account? Login</a>
    </div>
    <script>
    function validateRegister() {
        let valid = true;
        const name = document.getElementById('regName').value.trim();
        const email = document.getElementById('regEmail').value.trim();
        const password = document.getElementById('regPassword').value.trim();
        const confirm = document.getElementById('regConfirm').value.trim();
        document.getElementById('regNameError').textContent = '';
        document.getElementById('regEmailError').textContent = '';
        document.getElementById('regPasswordError').textContent = '';
        document.getElementById('regConfirmError').textContent = '';
        if (!name) {
            document.getElementById('regNameError').textContent = 'Name is required.';
            valid = false;
        }
        if (!email) {
            document.getElementById('regEmailError').textContent = 'Email is required.';
            valid = false;
        } else if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
            document.getElementById('regEmailError').textContent = 'Enter a valid email.';
            valid = false;
        }
        if (!password) {
            document.getElementById('regPasswordError').textContent = 'Password is required.';
            valid = false;
        } else if (password.length < 6) {
            document.getElementById('regPasswordError').textContent = 'Password must be at least 6 characters.';
            valid = false;
        }
        if (!confirm) {
            document.getElementById('regConfirmError').textContent = 'Please confirm your password.';
            valid = false;
        } else if (password !== confirm) {
            document.getElementById('regConfirmError').textContent = 'Passwords do not match.';
            valid = false;
        }
        return valid;
    }
    </script>
</body>
</html>
