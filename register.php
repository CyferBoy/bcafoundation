<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="icon" href="image/bca.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="register">
    <img src="image/reg.png" class="avatar" alt="avatar">
    <h1>Register yourself</h1>
    <form action="register.php" method="post">
        <div class="container row">
            <div class="col-6 float-left">
                <p>Name</p>
                <label>
                    <input type="text" name="name" placeholder="Enter name" required>
                </label>
            </div>
            <div class="col-6 float-left">
                <p>E-mail</p>
                <label>
                    <input type="email" name="email" placeholder="Enter email" required>
                </label>
            </div>
            <div class="col-6">
                <p>Password</p>
                <label>
                    <input type="password" name="password" placeholder="Enter Password" required>
                </label>
            </div>
            <div class="col-6">
                <p>Conform Password</p>
                <label>
                    <input type="text" name="re_pass" placeholder="Conform your Password" required>
                </label>
            </div>
        <input type="submit" name="submit" value="Register">
        <a href="login.php">Have an account? Login here</a>
        </div>
    </form>

</div>

</body>
</html>

<?php

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, 'bca_foundation');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $re_pass = $_POST['re_pass'];
    $s = "select * from register where email='$email'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "<script>alert('Email is already registered')</script>";
    }
    elseif ($pass == $re_pass){
        $_SESSION['name']= $name;
        $reg = "insert into register (name, email, password) value ('$name', '$email', '$pass')";
        mysqli_query($con, $reg);
        echo "<script>alert('Registration successful')</script>";
        header('location:index.php');
    }
    else {
        echo "<script>alert('Password doesnt match')</script>";
    }
}
?>