<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات ما</title>
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
            color: #fff;
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

        .request-button {
            display: block;
            margin: 40px auto;
            background-color: #4CAF50;
            color: white;
            padding: 18px 30px;
            text-align: center;
            font-size: 20px;
            text-decoration: none;
            border-radius: 8px;
            width: 250px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .request-button:hover {
            background-color: #218838;
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
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
            .service-cards {
                grid-template-columns: 1fr;
            }
            .request-button {
                width: 90%;
                font-size: 18px;
            }
        }

    </style>
</head>
<body>

    <header>
        <h1>خدمات ما</h1>
        <p>در اینجا می‌توانید با خدمات تعمیراتی ما بیشتر آشنا شوید.</p>
    </header>

    <nav>
        <a href="index.php">صفحه اصلی</a>
        <a href="services.php">خدمات ما</a>
        <a href="about.php">درباره ما</a>
        <a href="contact.php">تماس با ما</a>
    </nav>

    <div class="container">
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

        <a href="request-repair.php" class="request-button">ثبت درخواست تعمیر</a>
    </div>

    <footer>
        <p>&copy; 2025 تعمیرات لوازم خانگی - تمامی حقوق محفوظ است.</p>
    </footer>

</body>
</html>
