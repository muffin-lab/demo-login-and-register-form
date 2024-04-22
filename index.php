<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Login or Register</h1>
        <div class="form-container">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                <button type="submit" name="login">Login</button>
            </form>
            <p>Don't have an account? <a href="#">Register Here</a></p>
        </div>
        <div class="form-container">
            <form action="register.php" method="post">
                <h2>Register</h2>
                <label for="fullname">Full Name:</label>
                <input type="text" name="fullname" id="fullname" placeholder="Enter your full name" required>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                <button type="submit" name="register">Register</button>
            </form>
        </div>
    </div>
</body>

</html>