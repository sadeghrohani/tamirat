<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما</title>
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

        .contact-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
        }

        .contact-info div {
            width: 30%;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-info h3 {
            margin-bottom: 15px;
            font-size: 20px;
        }

        .contact-info p {
            font-size: 16px;
            color: #555;
        }

        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .input-field {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .map-section {
            margin-top: 50px;
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

            .contact-info {
                flex-direction: column;
                align-items: center;
            }

            .contact-info div {
                width: 80%;
                margin-bottom: 30px;
            }

            .container {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>تماس با ما</h1>
        <p>اگر سوال یا مشکلی دارید، با ما در ارتباط باشید.</p>
    </header>

    <nav>
        <a href="index.php">صفحه اصلی</a>
        <a href="services.php">خدمات ما</a>
        <a href="about.php">درباره ما</a>
        <a href="contact.php">تماس با ما</a>
    </nav>

    <div class="container">
        <!-- Contact Information Section -->
        <h2 class="section-title">اطلاعات تماس</h2>
        <div class="contact-info">
            <div>
                <h3>آدرس</h3>
                <p>ایران. تهران. میدان آزادی</p>
            </div>
            <div>
                <h3>شماره تماس</h3>
                <p>09121234567</p>
            </div>
            <div>
                <h3>ایمیل</h3>
                <p>info@example.com</p>
            </div>
        </div>

        <!-- Contact Form Section -->
        <h2 class="section-title">فرم تماس با ما</h2>
        <div class="contact-form">
            <form action="contact.php" method="POST">
                <input type="text" name="name" class="input-field" placeholder="نام شما" required>
                <input type="email" name="email" class="input-field" placeholder="ایمیل شما" required>
                <textarea name="message" class="input-field" placeholder="پیام شما" rows="5" required></textarea>
                <button type="submit" class="submit-btn">ارسال پیام</button>
            </form>
        </div>

        <!-- Google Map Section -->
        <div class="map-section">
            <h2 class="section-title">موقعیت ما در نقشه</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4418.4572895924965!2d51.6881119!3d32.6522576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f593869b5cc2aab%3A0x2c8ccf5984627f4f!2z2KrZhdin2KfYp9iq2KZb!5e0!3m2!1sen!2s!4v1646765497839!5m2!1sen!2s"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 تعمیرات لوازم خانگی - تمامی حقوق محفوظ است.</p>
    </footer>

</body>
</html>
