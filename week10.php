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

<?php
$username = "rohit";
$email = "rohit@gmail.com";
$fullname = "Rohit Jha";
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Account</title>

        <style>
                body {
                            font-family: Arial;
                                        background-color: #f2f2f2;
                                                }

                                                        .account {
                                                                    width: 350px;
                                                                                margin: 50px auto;
                                                                                            background: white;
                                                                                                        padding: 20px;
                                                                                                                    text-align: center;
                                                                                                                                border-radius: 10px;
                                                                                                                                        }

                                                                                                                                                h2 {
                                                                                                                                                            color: #333;
                                                                                                                                                                    }

                                                                                                                                                                            p {
                                                                                                                                                                                        font-size: 16px;
                                                                                                                                                                                                }

                                                                                                                                                                                                        button {
                                                                                                                                                                                                                    padding: 10px 20px;
                                                                                                                                                                                                                                background-color: blue;
                                                                                                                                                                                                                                            color: white;
                                                                                                                                                                                                                                                        border: none;
                                                                                                                                                                                                                                                                    border-radius: 5px;
                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                </style>
                                                                                                                                                                                                                                                                                </head>

                                                                                                                                                                                                                                                                                <body>

                                                                                                                                                                                                                                                                                    <div class="account">

                                                                                                                                                                                                                                                                                            <h2>My Account</h2>

                                                                                                                                                                                                                                                                                                    <hr>

                                                                                                                                                                                                                                                                                                            <p><b>Full Name:</b> <?php echo $fullname; ?></p>

                                                                                                                                                                                                                                                                                                                    <p><b>Username:</b> <?php echo $username; ?></p>

                                                                                                                                                                                                                                                                                                                            <p><b>Email:</b> <?php echo $email; ?></p>

                                                                                                                                                                                                                                                                                                                                    <p><b>Account Status:</b> Active</p>

                                                                                                                                                                                                                                                                                                                                            <br>

                                                                                                                                                                                                                                                                                                                                                    <button onclick="alert('Edit Profile Clicked')">
                                                                                                                                                                                                                                                                                                                                                                Edit Profile
                                                                                                                                                                                                                                                                                                                                                                        </button>

                                                                                                                                                                                                                                                                                                                                                                                <br><br>

                                                                                                                                                                                                                                                                                                                                                                                        <button onclick="alert('Logout Clicked')">
                                                                                                                                                                                                                                                                                                                                                                                                    Logout
                                                                                                                                                                                                                                                                                                                                                                                                            </button>

                                                                                                                                                                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                                                                                                                                                                </body>
                                                                                                                                                                                                                                                                                                                                                                                                                </html>