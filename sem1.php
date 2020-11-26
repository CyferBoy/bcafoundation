<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semester 1</title>
    <link rel="icon" href="image/bca.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sem-style.css">
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
<div id="sem1">
    <section>
        <div class="container">
            <a href="index.php">
                <img src="image/bcaf.png" class="logo" alt="logo">
            </a>
        </div>
    </section>
    <nav id="sidenav">
        <ul>
            <li><a data-scroll href="index.php">HOME</a></li>
            <?php
                if(isset($_SESSION['email'])){
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";
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
    <section id="reference-books">
        <div class="container sem-row">
            <div id="sem-1" class="btn-seg">
                <button class="sem-btn"><h3>Semester 1</h3></button>
            </div>
            <div class="image">
                <h1>Reference Books</h1>
            </div>
        </div>
    </section>
    <section id="book-list">
        <div class="container sem-row">
            <div id="left" class="col-6 id">
                <a href="Contents/Refrence_books/Sem1/C++/CoreC++.pdf" target="_blank">
                    <img src="Contents/Refrence_books/Sem1/C++/image/c++.jpg" alt="c++">
                    <p><b>C++ A Software Engineering Approach<br><i>Victor Shtern</i></b><br>Publisher: Prentice Hall PTR<br>
                        First Edition July 24, 2000<br>
                        ISBN: 0-13-085729-7, 1280 pages
                    </p>
                </a>
            </div>
            <div id="right" class="col-6 id">
                <a href="Contents/Refrence_books/Sem1/Computer_System_Architecture/COMPUTER_SYSTEM_ARCHITECTURE.pdf" target="_blank">
                    <div>
                        <img src="Contents/Refrence_books/Sem1/Computer_System_Architecture/csa.jpg" alt="csa">
                        <p><b>Computer System Architecture<br><i>M. Morris Mano</i></b><br>Publisher: Prentice Hall PTR<br>
                            First Edition September, 2007<br>
                            ISBN: 9780131757387, 542 pages
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Previous year Question -->
    <section id="question">
        <div class="container">
            <div class="sem-row">
                <h2>Previous Year Question</h2>
                <div class="col-4 id">
                    <a>
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_1/cpp_logo.png" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a>
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_1/2.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a>
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_2/maths.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once ('footer.php');
?>
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
    const scroll = new SmoothScroll('a[href="#"]', {
        speed: 1000,
        speedAsDuration: true
    });
</script>
</body>
</html>