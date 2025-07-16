<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Signed Out</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #ff5858, #f09819);
    height: 100vh;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
  }
  .logout-container {
    background: rgba(0,0,0,0.4);
    padding: 40px 60px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    max-width: 400px;
  }
  h1 {
    font-size: 36px;
    margin-bottom: 20px;
  }
  p {
    font-size: 18px;
    margin-bottom: 30px;
  }
  a.login-btn {
    display: inline-block;
    padding: 12px 25px;
    background-color: #4caf50;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }
  a.login-btn:hover {
    background-color: #388e3c;
  }
</style>
</head>
<body>
  <div class="logout-container">
    <h1>Signed Out</h1>
    <p>You have successfully signed out.</p>
    <a class="login-btn" href="login.php">Sign In Again</a>
  </div>
</body>
</html>
