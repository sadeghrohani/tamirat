<?php
session_start();

// فایل اتصال به دیتابیس
require_once 'db.php';

// بررسی اتصال به دیتابیس
if ($db) {
    // همه چیز خوب است و می‌توانید ادامه دهید
} else {
    // خطای اتصال به دیتابیس
    echo "مشکلی در اتصال به پایگاه داده وجود دارد.";
}


// متغیرها
$message = "";

// ثبت درخواست تعمیر
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $appliance_type = $_POST['appliance_type'];
    $brand = $_POST['brand'];
    $issue_description = $_POST['issue_description'];

    // آماده‌سازی کوئری برای ثبت درخواست
    $query = "INSERT INTO repairs (first_name, phone, address, appliance_type, brand, issue_description, request_date, status) 
              VALUES (?, ?, ?, ?, ?, ?, NOW(), 'در انتظار')";

    // بررسی اتصال به دیتابیس
    if ($db) {
        $stmt = $db->prepare($query);
        
        // بررسی اینکه آیا prepare موفقیت‌آمیز بود
        if ($stmt) {
            $stmt->bind_param("ssssss", $first_name, $phone, $address, $appliance_type, $brand, $issue_description);

            // اجرای کوئری
            if ($stmt->execute()) {
                $message = "درخواست تعمیر شما با موفقیت ثبت شد. به زودی با شما تماس خواهیم گرفت.";
            } else {
                $message = "متاسفانه درخواست شما ثبت نشد. لطفاً دوباره تلاش کنید.";
            }
        } else {
            $message = "مشکلی در اتصال به پایگاه داده وجود دارد.";
        }
    } else {
        $message = "اتصال به دیتابیس برقرار نشد.";
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت درخواست تعمیر</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            direction: rtl;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
            font-weight: 300;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }

        nav a {
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }

        nav a:hover {
            background-color: #575757;
            transition: background-color 0.3s ease;
        }

        .container {
            width: 70%;
            max-width: 1200px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #4CAF50;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 150px;
        }

        .form-group button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            font-size: 18px;
            color: green;
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
        }

        footer p {
            font-size: 14px;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            header h1 {
                font-size: 30px;
            }

            header p {
                font-size: 16px;
            }

            nav a {
                font-size: 14px;
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>ثبت درخواست تعمیر</h1>
        <p>لطفاً فرم زیر را پر کنید تا درخواست تعمیر لوازم خانگی شما ثبت شود.</p>
    </header>

    <nav>
        <a href="index.php">صفحه اصلی</a>
        <a href="services.php">خدمات ما</a>
        <a href="about.php">درباره ما</a>
        <a href="contact.php">تماس با ما</a>
    </nav>

    <div class="container">
        <h2 class="section-title">فرم ثبت درخواست تعمیر</h2>

        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <form action="request-repair.php" method="POST">
            <!-- نام و نام خانوادگی -->
            <div class="form-group">
                <label for="first_name">نام</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>

            <!-- شماره تماس -->
            <div class="form-group">
                <label for="phone">شماره تماس</label>
                <input type="text" name="phone" id="phone" required>
            </div>

            <!-- آدرس -->
            <div class="form-group">
                <label for="address">آدرس دقیق</label>
                <input type="text" name="address" id="address" required>
            </div>

            <!-- نوع لوازم خانگی -->
            <div class="form-group">
                <label for="appliance_type">نوع لوازم خانگی</label>
                <select name="appliance_type" id="appliance_type" required>
                    <option value="لباسشویی">لباسشویی</option>
                    <option value="یخچال">یخچال</option>
                    <option value="فر">فر</option>
                    <option value="مایکروویو">مایکروویو</option>
                    <option value="اجاق گاز">اجاق گاز</option>
                </select>
            </div>

            <!-- برند -->
            <div class="form-group">
                <label for="brand">برند</label>
                <input type="text" name="brand" id="brand" required>
            </div>

            <!-- شرح مشکل -->
            <div class="form-group">
                <label for="issue_description">توضیحات مشکل</label>
                <textarea name="issue_description" id="issue_description" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit">ارسال درخواست</button>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 تعمیرات لوازم خانگی - تمامی حقوق محفوظ است.</p>
    </footer>

</body>
</html>
