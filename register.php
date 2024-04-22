<?php
if (isset($_POST["register"])) {
    include("connection.php");
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT * FROM user_register WHERE fullname = '$fullname'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "SELECT * FROM user_register WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_user == 0 || $count_email == 0) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_register (fullname, email, password) VALUES ('$fullname', '$email', '$hash')";
        $result = mysqli_query($conn, $sql);
        echo '<script>
            alert ("Registration Successful.");
            window.location.href = "welcome.php";
        </script>';
    } else {
        echo '<script>
                    alert ("User Already Exits");
                    window.location.href = "index.php";
                </script>';
    }
}
