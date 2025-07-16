<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Welcome</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #43cea2, #185a9d);
    height: 100vh;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
  }
  .welcome-container {
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
  a.logout-btn {
    display: inline-block;
    padding: 12px 25px;
    background-color: #f44336;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }
  a.logout-btn:hover {
    background-color: #d32f2f;
  }
</style>
</head>
<body>
  <div class="welcome-container">
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>You have successfully signed in.</p>
    <a class="logout-btn" href="logout.php">Sign Out</a>
  </div>
</body>
</html>
