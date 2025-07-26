<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما</title>
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

        .about-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 50px;
        }

        .about-content img {
            width: 45%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            width: 50%;
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }

        .team-section {
            text-align: center;
        }

        .team-members {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            justify-content: center;
        }

        .team-member {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .team-member p {
            font-size: 16px;
            color: #666;
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

             .about-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .about-content img {
                width: 100%;
                margin-bottom: 30px;
            }

            .about-text {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>درباره ما</h1>
        <p>معرفی تیم و خدمات ما</p>
    </header>

    <nav>
        <a href="index.php">صفحه اصلی</a>
        <a href="services.php">خدمات ما</a>
        <a href="about.php">درباره ما</a>
        <a href="contact.php">تماس با ما</a>
    </nav>

    <div class="container">
        <!-- About Us Section -->
        <h2 class="section-title">درباره تیم ما</h2>
        <div class="about-content">
            <img src="images/about-us.jpg" alt="درباره ما">
            <div class="about-text">
                <p>
                    تیم ما با سال‌ها تجربه در ارائه خدمات تعمیرات لوازم خانگی آماده است تا بهترین و سریع‌ترین خدمات را به شما عزیزان ارائه دهد. ما به کیفیت و دقت در انجام کارهای تعمیراتی خود اهمیت ویژه‌ای می‌دهیم و همیشه در تلاشیم تا رضایت شما را جلب کنیم. در تیم ما، مجموعه‌ای از افراد متخصص و با تجربه در زمینه تعمیرات لوازم خانگی حضور دارند که همگی به بهبود و پیشرفت خدمات خود می‌اندیشند.
                </p>
                <p>
                    در اینجا، ما با استفاده از بهترین قطعات و تجهیزات، تعمیرات را با سرعت و دقت بالا انجام می‌دهیم. شما می‌توانید با اعتماد کامل به تیم ما خدمات تعمیراتی مورد نظر خود را دریافت کنید.
                </p>
            </div>
        </div>

        <!-- Our Team Section -->
        <h2 class="section-title">تیم ما</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="images/team1.jpg" alt="تیم عضو 1">
                <h3>محمد رحیمی</h3>
                <p>متخصص تعمیرات لوازم خانگی</p>
            </div>
            <div class="team-member">
                <img src="images/team2.jpg" alt="تیم عضو 2">
                <h3>مهدی نیکو</h3>
                <p>مدیر فنی و سرپرست تعمیرات</p>
            </div>
            <div class="team-member">
                <img src="images/team3.jpg" alt="تیم عضو 3">
                <h3>سارا احمدی</h3>
                <p>کارشناس پشتیبانی و خدمات مشتری</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 تعمیرات لوازم خانگی - تمامی حقوق محفوظ است.</p>
    </footer>

</body>
</html>
