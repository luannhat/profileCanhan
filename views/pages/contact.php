<?php
include_once(__DIR__ . "/../header.php");
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - Nhật Luân</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset và font chữ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        /* Section liên hệ */
        .contact-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 80px 20px;
            z-index: 1;
            overflow: hidden;
        }

        .contact-container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 2;
        }

        /* Phần thông tin liên hệ */
        .contact-info {
            padding: 20px;
        }

        .contact-info-title h2 {
            font-size: 2.2rem;
            color: #2c3e50;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .contact-info-title h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #3498db, #8e44ad);
        }

        .contact-info-title p {
            color: #7f8c8d;
            margin-bottom: 30px;
        }

        .info-box {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3498db, #8e44ad);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-right: 15px;
            flex-shrink: 0;
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .info-text h3 {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .info-text p {
            color: #7f8c8d;
            font-size: 0.95rem;
        }

        .social-links {
            display: flex;
            margin-top: 30px;
            gap: 15px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3498db, #8e44ad);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(52, 152, 219, 0.3);
        }

        /* Phần form liên hệ */
        .contact-form {
            padding: 20px;
        }

        .contact-form h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 30px;
            position: relative;
        }

        .contact-form h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #8e44ad, #3498db);
        }

        .form-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-field {
            position: relative;
            margin-bottom: 30px;
        }

        .form-field input,
        .form-field textarea {
            width: 100%;
            padding: 15px 0;
            font-size: 1rem;
            border: none;
            border-bottom: 2px solid #ddd;
            outline: none;
            background: transparent;
            transition: all 0.3s ease;
        }

        .form-field textarea {
            min-height: 100px;
            resize: vertical;
        }

        .form-field label {
            position: absolute;
            top: 15px;
            left: 0;
            font-size: 1rem;
            color: #7f8c8d;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .form-field input:focus~label,
        .form-field input:valid~label,
        .form-field textarea:focus~label,
        .form-field textarea:valid~label {
            top: -15px;
            font-size: 0.8rem;
            color: #3498db;
        }

        .form-field .focus-border {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #8e44ad, #3498db);
            transition: all 0.3s ease;
        }

        .form-field input:focus~.focus-border,
        .form-field textarea:focus~.focus-border {
            width: 100%;
        }

        .submit-btn {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 1rem;
            border-radius: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(52, 152, 219, 0.4);
        }

        /* Hiệu ứng nền */
        .contact-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.1), rgba(142, 68, 173, 0.1));
        }

        .circle-1 {
            width: 600px;
            height: 600px;
            top: -100px;
            left: -100px;
            animation: float 8s infinite ease-in-out;
        }

        .circle-2 {
            width: 400px;
            height: 400px;
            bottom: -50px;
            right: -50px;
            animation: float 10s infinite ease-in-out 2s;
        }

        .circle-3 {
            width: 300px;
            height: 300px;
            top: 50%;
            right: 30%;
            animation: float 12s infinite ease-in-out 4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-group {
                grid-template-columns: 1fr;
            }

            .contact-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <section class="contact-section">
        <div class="contact-container">
            <!-- Phần thông tin liên hệ -->
            <div class="contact-info">
                <div class="contact-info-title">
                    <h2>Liên hệ với tôi</h2>
                    <p>Hãy gửi tin nhắn hoặc liên hệ trực tiếp qua các kênh sau</p>
                </div>

                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text">
                        <h3>Địa chỉ</h3>
                        <p>465/3 Tân Kỳ Tân Quý, Tân Quý, Tân Phú, TP.HCM </p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <h3>Email</h3>
                        <p>luannhat44@gmail.com</p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-text">
                        <h3>Điện thoại</h3>
                        <p>+84 325 749 294</p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <!-- Phần form liên hệ -->
            <div class="contact-form">
                <h2>Gửi tin nhắn</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <div class="form-field">
                            <input type="text" id="name" required>
                            <label for="name">Họ và tên</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-field">
                            <input type="email" id="email" required>
                            <label for="email">Email</label>
                            <span class="focus-border"></span>
                        </div>
                    </div>

                    <div class="form-field">
                        <input type="text" id="subject" required>
                        <label for="subject">Tiêu đề</label>
                        <span class="focus-border"></span>
                    </div>

                    <div class="form-field">
                        <textarea id="message" required></textarea>
                        <label for="message">Nội dung</label>
                        <span class="focus-border"></span>
                    </div>
                    <div id="formMessage"></div>
                    <button type="submit" class="submit-btn">
                        <span>Gửi tin nhắn</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Hiệu ứng nền -->
    <div class="contact-bg">
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
        <div class="bg-circle circle-3"></div>
    </div>

</body>

</html>