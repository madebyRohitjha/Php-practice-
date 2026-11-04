<?php
$username = "rohit";
$password = "12345";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username == $username && $input_password == $password) {
        $message = "Login Successful!";
    } else {
        $message = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Login</title>
</head>
<body>

    <h2>Login Form</h2>

    <form method="POST" action="">

        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Login">

    </form>

    <p><?php echo $message; ?></p>

</body>
</html>