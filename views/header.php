<?php include_once(__DIR__ . "/../config/config.php"); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nhật Luân</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        /* CSS giống như bạn đã viết trong layout.php, phần nav và style */
        body {
            margin: 0;
            font-family: sans-serif;
        }

        nav {
            background: #333;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #00ffc8;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo"><a href="#">Nhật Luân</a></div>
        <div class="menu">
            <a href="<?= $base ?>views/pages/home.php">Trang chủ</a>
            <a href="<?= $base ?>views/pages/aboutme.php">Giới thiệu</a>
            <a href="<?= $base ?>views/pages/projects.php">Dự án</a>
            <a href="<?= $base ?>views/pages/contact.php">Liên hệ</a>
        </div>
    </nav>
