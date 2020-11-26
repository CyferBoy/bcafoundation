<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" href="image/bca.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
<body>
<div class="loginbox">
    <img src="image/avatar.png" class="avatar" alt="avatar">
    <h1>Login Here</h1>
    <form action="login.php" method="post">
        <p>Email</p>
        <label>
            <input type="email" name="email" placeholder="Enter Email">
        </label>
        <p>Password</p>
        <label>
            <input type="password" name="password" placeholder="Enter Password">
        </label>
        <input type="submit" name="login" value="Login">
        <a href="register.php">Don't have an account?</a>
    </form>

</div>

</body>
</html>

<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'bca_foundation');

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $s = "select * from register where email = '$email' && password = '$pass'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $_SESSION['email'] = $email;
        header('location:index.php');
    }
    else{
        header('location:login.php');
        echo "<script>alert('oops! Email or Password is wrong!')</script>";
    }
}
?>
