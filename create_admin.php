<?php
require_once 'db.php';

// رمز عبور مدیر
$username = 'admin';  // نام کاربری
$password = '123456';  // رمز عبور واقعی را اینجا وارد کنید

// هش کردن رمز عبور
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// وارد کردن اطلاعات به دیتابیس
$query = "INSERT INTO admin (username, password) VALUES (?, ?)";
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $username, $hashed_password);

if ($stmt->execute()) {
    echo "رمز عبور مدیر با موفقیت ذخیره شد!";
} else {
    echo "خطا در ذخیره رمز عبور.";
}
?>
