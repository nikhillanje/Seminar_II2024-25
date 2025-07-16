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
        }
    </style>
    <meta http-equiv="refresh" content="1"> <!-- Refresh page every 1 second -->
</head>
<body>

<?php
date_default_timezone_set("Asia/Kolkata"); // Set your server timezone
echo date("h:i:s A"); // Display time in HH:MM:SS AM/PM format
?>

</body>
</html>
