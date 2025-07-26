<?php
session_start();
require_once 'db.php';

$message = "";

// بررسی اینکه مدیر وارد شده است یا خیر
if (isset($_SESSION['admin_id'])) {
    header("Location: admin_dashboard.php"); // اگر وارد شده باشد، به داشبورد هدایت می‌شود
    exit;
}

// ورود مدیر
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // گرفتن اطلاعات مدیر از دیتابیس
    $query = "SELECT * FROM admin WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();

    if ($admin && password_verify($password, $admin['password'])) {
        // اگر نام کاربری و رمز عبور صحیح باشد
        $_SESSION['admin_id'] = $admin['id'];
        header("Location: admin_dashboard.php"); // هدایت به صفحه داشبورد
        exit;
    } else {
        $message = "نام کاربری یا رمز عبور اشتباه است.";
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود مدیر</title>
    <style>
        /* سبک‌های صفحه ورود */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>ورود به حساب مدیر</h2>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <form action="admin_login.php" method="POST">
            <div class="form-group">
                <label for="username">نام کاربری</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">رمز عبور</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <button type="submit">ورود</button>
            </div>
        </form>
    </div>

</body>
</html>
