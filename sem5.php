<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semester 5</title>
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
                <button class="sem-btn"><h3>Semester 5</h3></button>
            </div>
            <div class="image">
                <h1>Reference Books</h1>
            </div>
        </div>
    </section>
    <section id="book-list">
        <div class="container sem-row">
            <div>
                <h4>Internet Technologies & Theory of Computation</h4>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem5/Internet%20Technologies/1.Beginning%20HTML,%20XHTML,%20CSS%20and%20JavaScript%20(%20PDFDrive.com%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem5/Internet%20Technologies/1.png" alt="c++">
                        <p><b>Beginning HTML, XHTML, CSS, and JavaScript<br><i>Jon Duckett</i></b><br>Publisher: Wiley Publishing, Inc.<br>
                            First Edition 2010<br>
                            ISBN: 978-0-470-54070-1, 865 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem5/Theory%20of%20Computation/1.An%20Introduction%20to%20Formal%20Languages%20and%20Automata,%205th%20Edition%20(%20PDFDrive.com%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem5/Theory%20of%20Computation/1.png" alt="c++">
                        <p><b>An Introduction to
                            FORMAL LANGUAGES
                            and AUTOMATA<br><i>Peter Linz</i></b><br>Publisher: Jones & Bartlett Learning<br>
                            Fifth Edition 2012<br>
                            ISBN: 978-1-4496-1552-9, 532 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem5/Theory%20of%20Computation/2.Introduction%20to%20Automata%20Theory,%20Languages,%20and%20Computations%20(%20PDFDrive.com%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem5/Theory%20of%20Computation/2.jpg" alt="c++">
                        <p><b>Introduction to
                            Automata Theory,
                            Languages, and
                            Computation<br><i>John E. Hopcroft<br>Rajeev Motwani<br>Jeffrey D. Ullman</i></b><br>Publisher: Pearson Publication<br>
                            Third Edition 2006<br>
                            ISBN: 0-321-45536-3, 550 pages
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="book-list2">
        <div class="container sem-row">
            <div>
                <h4>Network Programming & Microprocessor</h4>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem5/Network_Programming/1.Data_Communications_and_Networking.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem5/Network_Programming/1.png" alt="c++">
                        <p><b>DATA COMMUNICATIONS AND NETWORKING<br><i>Behrouz A. Forouzan<br>Sophia Chung Fegan</i></b><br>Publisher: McGraw-Hill<br>
                            Fourth Edition September 2007<br>
                            ISBN: 9780072967753, 1134 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem5/Network_Programming/2.UNIX%20Network%20Programming,%20Volume%201,%20Third%20Edition,%20The%20Sockets%20Networking%20API.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem5/Network_Programming/2.jpg" alt="c++">
                        <p><b>UNIX Network Programming: The sockets networking API<br><i>W. Richard Stevens<br>W. Stevens<br>Bill Fenner<br>Andrew M. Rudoff</i></b><br>Publisher: Addison-Wesley<br>
                            First Edition 2004<br>
                            ISBN: 978-1-4496-1552-9, 991 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem5/Micoprocessor/1.intel_book.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem5/Micoprocessor/1.png" alt="c++">
                        <p><b>THE INTEL MICROPROCESSORS<br><i>BARRY B. BREY</i></b><br>Publisher: Pearson Publication<br>
                            Eighth Edition 2009<br>
                            ISBN: 0-13-502645-8, 944 pages
                        </p>
                    </a>
                </div>
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
                            <img src="Contents/Previus_Year_Question/Sem_5/1.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a>
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_5/2.png" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a>
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_5/3.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a>
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_5/4.jpg" alt="descreat">
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