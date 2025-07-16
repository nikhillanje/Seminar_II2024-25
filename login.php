<?php
session_start();

// Define valid username-password pairs
$valid_users = [
    "admin" => "password123",
    "user1" => "pass456",
    "john" => "john789",
    "alice" => "alice321"
];

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if username exists and password matches
    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Sign In</title>
<style>
  /* (Use same styling as before) */
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    height: 100vh;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .login-container {
    background: white;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    width: 320px;
    text-align: center;
  }
  h2 {
    margin-bottom: 24px;
    color: #333;
  }
  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    margin: 10px 0 20px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s ease;
  }
  input[type="text"]:focus, input[type="password"]:focus {
    border-color: #667eea;
    outline: none;
  }
  button {
    background-color: #667eea;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    width: 100%;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  button:hover {
    background-color: #5a67d8;
  }
  .error {
    color: #e53e3e;
    margin-bottom: 15px;
    font-weight: bold;
  }
</style>
</head>
<body>
<div class="login-container">
  <h2>Sign In</h2>
  <?php if ($error): ?>
    <div class="error"><?php echo htmlspecialchars($error); ?></div>
  <?php endif; ?>
  <form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required autocomplete="off" />
    <input type="password" name="password" placeholder="Password" required autocomplete="off" />
    <button type="submit">Sign In</button>
  </form>
</div>
</body>
</html>
