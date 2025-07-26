<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعمیرات لوازم خانگی</title>
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
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
        }

        .section-title {
            text-align: center;
            font-size: 28px;
            margin-bottom: 40px;
            color: #4CAF50;
        }

        .service-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .service-card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }

        .service-card img {
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .service-card p {
            font-size: 16px;
            color: #666;
        }

        /* New Section for Repair Request Button */
        .repair-request-section {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 40px 20px;
            margin-top: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .repair-request-section h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .repair-request-section p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .repair-request-btn {
            background-color: white;
            color: #4CAF50;
            padding: 15px 30px;
            text-align: center;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .repair-request-btn:hover {
            background-color: #45a049;
            color: white;
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

            .repair-request-btn {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>تعمیرات لوازم خانگی</h1>
        <p>تعمیرات سریع و مطمئن برای لوازم خانگی شما</p>
    </header>

    <nav>
        <a href="index.php">صفحه اصلی</a>
        <a href="services.php">خدمات ما</a>
        <a href="about.php">درباره ما</a>
        <a href="contact.php">تماس با ما</a>
    </nav>

    <div class="container">
        <!-- Existing Service Cards Section -->

        <h2 class="section-title">خدمات ما</h2>
        <div class="service-cards">
            <div class="service-card">
                <img src="images/washing-machine-icon.png" alt="تعمیر لباسشویی">
                <h3>تعمیر لباسشویی</h3>
                <p>تعمیر انواع لباسشویی‌ها با ضمانت کیفیت.</p>
            </div>
            <div class="service-card">
                <img src="images/fridge-icon.png" alt="تعمیر یخچال">
                <h3>تعمیر یخچال</h3>
                <p>تعمیر یخچال و فریزر با قطعات اورجینال.</p>
            </div>
            <div class="service-card">
                <img src="images/oven-icon.png" alt="تعمیر فر">
                <h3>تعمیراجاق گاز</h3>
                <p>تعمیر انواع اجاق گازهای خانگی و صنعتی.</p>
            </div>
        </div>

        <!-- New Section for Repair Request Button -->
        <div class="repair-request-section">
            <h2>برای ثبت درخواست تعمیر لوازم خانگی خود، به صفحه ثبت درخواست تعمیر بروید.</h2>
            <p>کافیست وارد صفحه ثبت درخواست تعمیر شوید تا درخواست خود را ارسال کنید.</p>
            <a href="request-repair.php" class="repair-request-btn">ثبت درخواست تعمیر</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 تعمیرات لوازم خانگی - تمامی حقوق محفوظ است.</p>
    </footer>

</body>
</html>
