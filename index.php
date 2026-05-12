<?php
$token = "8611488339:AAF2ONvRUGZLBh2hSa3lxrAuK2Ob10SHTu4";
$chat_id = "1135336311";
$user_ip = $_SERVER['REMOTE_ADDR'];

$msg = "👀 Someone visited your AWS website! \nIP Address: " . $user_ip;
$url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($msg);

// Send message to Telegram (as soon as the website loads)
@file_get_contents($url);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mobile Responsiveness එකට වැදගත්ම පේළිය -->
    <title>AWS Cloud Server - DevOps</title>
    <style>
        :root {
            --primary: #00ffcc;
            --bg: #0a0f16;
            --card-bg: #111a24;
            --text: #e2e8f0;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: radial-gradient(circle at 50% -20%, #1a365d, transparent 50%);
        }
        .container {
            width: 85%;
            max-width: 600px;
            background: var(--card-bg);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(0, 255, 204, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 0 0 20px rgba(0, 255, 204, 0.1);
            text-align: center;
            animation: fadeIn 1s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h1 {
            color: var(--primary);
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-shadow: 0 0 15px rgba(0, 255, 204, 0.6);
        }
        p {
            color: #94a3b8;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .status-box {
            background: rgba(0, 255, 204, 0.05);
            padding: 15px 25px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            border: 1px solid rgba(0, 255, 204, 0.3);
            font-weight: bold;
            letter-spacing: 1px;
        }
        .status-dot {
            height: 12px;
            width: 12px;
            background-color: var(--primary);
            border-radius: 50%;
            display: inline-block;
            margin-right: 12px;
            box-shadow: 0 0 10px var(--primary);
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 255, 204, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(0, 255, 204, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 255, 204, 0); }
        }
        /* Mobile Responsiveness - ෆෝන් එකට ගාණට හැඩගැහෙන කොටස */
        @media (max-width: 600px) {
            .container {
                padding: 30px 20px;
                width: 90%;
            }
            h1 {
                font-size: 1.8rem;
            }
            p {
                font-size: 0.95rem;
            }
            .status-box {
                font-size: 0.9rem;
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Cloud Native DevOps</h1>
        <p>Welcome to my highly responsive, Dockerized Web Application running live on an AWS EC2 Server.</p>
        <div class="status-box">
            <span class="status-dot"></span>
            System Status: LIVE
        </div>
        <p style="margin-top: 30px; font-size: 0.85rem; color: #475569;">Version 4.0 - Mobile Responsive UI Update</p>
    </div>
</body>
</html>
