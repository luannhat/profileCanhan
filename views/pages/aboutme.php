<?php
include_once __DIR__ . '/../header.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>About me</title>
    <style>
        .motaaboutme {
            position: relative;
            width: 100vw;
            height: calc(100vh - 65px);
            overflow: hidden;
        }

        .bg-aboutme {
            background-image: url('<?= $base ?>public/imgs/bg2.jpg');
            background-size: cover;
            background-position: center;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .mota {
            position: absolute;
            font-family: sans-serif;
            z-index: 1;
            color: white;
            text-align: center;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 10%;
        }

        .icon-v {
            font-size: 30px;
            color: white;
            text-align: center;
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }

        .mota1,
        .mota2,
        .mota3,
        .mota4 {
            border: 5px solid #3498db;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
            background-color: #f4f4f4;
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            color: #333;
            height: 40px;
            width: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 15px 30px 15px;
            /* Thêm margin 30px ở dưới */
        }

        .mota-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="motaaboutme">
        <div class="bg-aboutme"></div>
        <div class="mota">
            <h1>Chào mừng bạn đến với phần giới thiệu về Nhật Luân</h1>
            <br>
            <div class="mota-container">
                <div class="mota1">
                    <h2>💻 Đam mê lập trình web - Sáng tạo không giới hạn! �</h2>
                </div>
                <div class="mota4">
                    <h2>💻 Tỷ mỷ, cần bù bù thông minh! 🚀</h2>
                </div>
                <div class="mota3">
                    <h2>💻 ! 🚀</h2>
                </div>
                <div class="mota2">
                    <h2>💻 Tỷ mỷ, ! 🚀</h2>
                </div>
            </div>
        </div>

        <i class="fa-solid fa-chevron-down icon-v"></i>
    </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".icon-v").addEventListener("click", function() {
            // Tạo một thẻ div cho thông báo
            let alertBox = document.createElement("div");
            alertBox.innerText = "Hết rồi. Nếu bạn muốn biết thêm về tôi thì hãy liên hệ với tôi ngay nè!";
            alertBox.style.position = "fixed";
            alertBox.style.top = "50%";
            alertBox.style.left = "50%";
            alertBox.style.transform = "translate(-50%, -50%)";
            alertBox.style.background = "rgba(0, 0, 0, 0.8)";
            alertBox.style.color = "white";
            alertBox.style.padding = "20px";
            alertBox.style.borderRadius = "10px";
            alertBox.style.zIndex = "1000";
            alertBox.style.textAlign = "center";

            // Thêm nút để đóng thông báo
            let closeBtn = document.createElement("button");
            closeBtn.innerText = "Đóng";
            closeBtn.style.marginTop = "10px";
            closeBtn.style.padding = "5px 10px";
            closeBtn.style.border = "none";
            closeBtn.style.background = "white";
            closeBtn.style.color = "black";
            closeBtn.style.cursor = "pointer";
            closeBtn.addEventListener("click", function() {
                document.body.removeChild(alertBox);
            });

            // Thêm nút vào hộp thông báo
            alertBox.appendChild(closeBtn);

            // Thêm hộp thông báo vào body
            document.body.appendChild(alertBox);
        });
    });
</script>

</html>