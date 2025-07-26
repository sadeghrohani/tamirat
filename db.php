<?php
// تنظیمات اتصال به پایگاه داده
$host = 'localhost';  // میزبان دیتابیس
$username = 'root';   // نام کاربری
$password = '';       // رمز عبور (اگر وجود دارد)
$database = 'repair_service';  // نام دیتابیس

// ایجاد اتصال به دیتابیس
$db = new mysqli($host, $username, $password, $database);

// بررسی اتصال
if ($db->connect_error) {
    die("اتصال به پایگاه داده برقرار نشد: " . $db->connect_error);
}
?>
