<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome to our website!</h1>
        <?php
        // Get current date
        $date = date('Y-m-d');
        echo "<p>Today's date is: $date</p>";
        ?>
        <p>We're glad you're here. Explore our content and discover something new!</p>
        <button onclick="window.location = './index.php'">Go Back</button>
    </div>
</body>

</html>