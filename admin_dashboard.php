<?php
session_start();
require_once 'db.php';

// بررسی ورود مدیر
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

// گرفتن تمامی درخواست‌های تعمیر
$query = "SELECT * FROM repairs";
$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد مدیر</title>
    <style>
        /* استایل داشبورد */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 80%;
            max-width: 1200px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        .logout-btn {
            display: block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>داشبورد مدیر</h2>
        <table>
            <tr>
                <th>نام</th>
                <th>شماره تماس</th>
                <th>آدرس</th>
                <th>نوع لوازم خانگی</th>
                <th>برند</th>
                <th>شرح مشکل</th>
                <th>تاریخ درخواست</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['appliance_type']; ?></td>
                    <td><?php echo $row['brand']; ?></td>
                    <td><?php echo $row['issue_description']; ?></td>
                    <td><?php echo $row['request_date']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <a href="logout.php" class="logout-btn">خروج</a>
    </div>

</body>
</html>
