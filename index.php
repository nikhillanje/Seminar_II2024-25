<!DOCTYPE html>
<html>
<head>
    <title>PHP Digital Clock</title>
    <style>
        body {
            background-color: #111;
            color: #00ffcc;
            font-family: 'Courier New', monospace;
            font-size: 60px;
            text-align: center;
            margin-top: 20%;
            /* Add subtle gradient background */
            background: linear-gradient(135deg, #111, #222, #111);
        }
        .clock {
            display: inline-block;
            padding: 20px 40px;
            border: 4px solid #00ffcc;
            border-radius: 15px;
            box-shadow:
                0 0 20px #00ffcc,
                inset 0 0 10px #00ffcc;
            letter-spacing: 8px;
            text-shadow:
                0 0 5px #00ffcc,
                0 0 10px #00ffcc,
                0 0 20px #00ffcc,
                0 0 40px #00ffcc;
            user-select: none;
            background-color: rgba(0, 255, 204, 0.1);
        }
    </style>
    <meta http-equiv="refresh" content="1"> <!-- Refresh page every 1 second -->
</head>
<body>

<div class="clock">
<?php
date_default_timezone_set("Asia/Kolkata"); // Set your server timezone
echo date("h:i:s A"); // Display time in HH:MM:SS AM/PM format
?>
</div>

</body>
</html>
