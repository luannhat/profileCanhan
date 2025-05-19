<?php include_once(__DIR__ . "/../config/config.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>Profile</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        nav {
            background: #333;
            padding: 10px 20px;
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
            <a href="<?= $base ?>views/pages/aboutme.php">Giới thiệu</a>
            <a href="<?= $base ?>views/pages/projects.php">Dự án</a>
            <a href="<?= $base ?>views/pages/contact.php">Liên hệ</a>
        </div>
    </nav>
</body>

</html>