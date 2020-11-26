<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BCA Foundation</title>
    <link rel="icon" href="image/bca.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/s-num.css">
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
<section id="header">
    <div class="menu-bar float-right">
        <ul>
            <li class="active"><a data-scrol href="#header"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="login.html"><i class="fa fa-user"></i>Login</a></li>
            <li><a href="register.html"><i class="fa fa-user-plus"></i>Register</a></li>
            <li><a data-scroll href="#contact"><i class="fa fa-phone"></i>Contact</a></li>
            <li><a data-scroll href="#map"><i class="fa fa-map"></i>Map</a></li>
        </ul>
    </div>
    <div class="container1">
        <a href="index.php">
            <img src="image/bcaf.png" class="logo" alt="logo">
        </a>
        <div class="header-text">
            <h1 class="text">The purpose is to <br>teach, bring learning to people</h1>
            <span class="square"></span>
            <p>There are many variations of passages of lorem ipsum available,
                but the majority have suffered alteration in some form, by injected
                humour, or randomised words which don't look even slightly available.</p>
            <button class="common-btn">Read more</button>
        </div>
        <div class="line">
            <span class="line-1"></span><br>
            <span class="line-2"></span><br>
            <span class="line-3"></span>
        </div>
    </div>
</section>


<nav id="sidenav">
    <ul>
        <li><a data-scroll href="#header">HOME</a></li>
        <?php
            if(isset($_SESSION['email'])){
                echo "<li><a href='profile.php'>PROFILE</a></li>";
                echo "<li><a href='logout.php'>LOGOUT</a></li>";
            }
            else{
                echo "<li><a href='login.php'>Login</a></li>";
                echo "<li><a href='register.php'>Register</a></li>";
            }
        ?>
        <li><a data-scroll href="#contact">CONTACT</a></li>
        <li><a data-scroll href="#map">MAP</a></li>
    </ul>
</nav>
<img src="image/menu.png" id="menuBtn" alt="menu">
<!-- Script -->
<script>
    const menuBtn = document.getElementById("menuBtn");
    const sidenav = document.getElementById("sidenav");

    sidenav.style.right = "-250px";
    menuBtn.onclick = function (){
        if (sidenav.style.right === "-250px"){
            sidenav.style.right = "0";
        }
        else {
            sidenav.style.right = "-250px"
        }
    }
    const scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
    });
</script>