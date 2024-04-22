<?php
if (isset($_POST["login"])) {
    include("connection.php");
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT * FROM user_register WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($row) {
        if (password_verify($password, $row["password"])) {
            header("Location: welcome.php");
        }
    } else {
        echo "<script>
                alert('Invalid username or password.');
                windows.location.href = 'index.php';
            </script>";
    }
}
