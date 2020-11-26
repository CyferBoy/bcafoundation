<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semester 4</title>
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
                <button class="sem-btn"><h3>Semester 4</h3></button>
            </div>
            <div class="image">
                <h1>Reference Books</h1>
            </div>
        </div>
    </section>
    <section id="book-list">
        <div class="container sem-row">
            <div>
                <h4>DBMS & Soft. Engnr.</h4>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem4/Database%20Management%20System/1.FUNDAMENTALS%20OF%20Database%20Systems%20(%20PDFDrive.com%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem4/Database%20Management%20System/1.png" alt="c++">
                        <p><b>FUNDAMENTALS OF Database Systems<br><i>Ramez Elmasri<br>Shamkant B. Navathe</i></b><br>Publisher: Addison-Wesley<br>
                            Sixth Edition 2011<br>
                            ISBN: 978-0-136-08620-8, 1200 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem4/Software%20Engineering/1.An%20Integrated%20Approach%20to%20Software%20Engineering%20(%20PDFDrive.com%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem4/Software%20Engineering/1.png" alt="c++">
                        <p><b>An Integrated Approach to
                            Software Engineering<br><i>Pankaj Jalote</i></b><br>Publisher: Springer Science+Business Media, LLC<br>
                            First Edition 1991<br>
                            ISBN: 978-1-4757-3859-9, 390 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem4/Software%20Engineering/2.Fundamentals%20of%20Software%20Engineering,%20Fourth%20Edition,%20Rajib%20Mall%20(%20PDFDrive.com%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem4/Software%20Engineering/2.png" alt="c++">
                        <p><b>FUNDAMENTALS OF SOFTWARE ENGINEERING<br><i>Rajib Mall</i></b><br>Publisher: PHI Learning Private Limited<br>
                            Fourth Edition 2014<br>
                            ISBN: 978-81-203-4898-1, 715 pages
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="book-list2">
        <div class="container sem-row">
            <div>
                <h4>DAA & PHP</h4>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem4/Design%20and%20Analysis%20of%20Algorithms/1.Introduction%20to%20Algorithms,%20Third%20Edition%20(%20PDFDrive.com%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem4/Design%20and%20Analysis%20of%20Algorithms/1.png" alt="c++">
                        <p><b>Introduction to Algorithms<br><i>Thomas H. Cormen<br>
                            Charles E. Leiserson<br>
                            Ronald L. Rivest<br>
                            Clifford Stein</i></b><br>Publisher: The MIT Press
                            Cambridge, Massachusetts<br>
                            Third Edition 2009<br>
                            ISBN: 978-0-262-03384-8, 1315 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem4/Design%20and%20Analysis%20of%20Algorithms/2.Introduction%20to%20the%20Design%20and%20Analysis%20of%20Algorithms%20-%20FTP%20Directory%20%20(%20PDFDrive.com%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem4/Design%20and%20Analysis%20of%20Algorithms/2.png" alt="c++">
                        <p><b>Introduction To Design And Analysis Of Algorithms<br><i> Anany Levitin</i></b><br>Publisher: Pearson Education<br>
                            Third Edition 2012<br>
                            ISBN: 9788131718377, 544 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem4/PHP/1.php-mysql-javascript-html5-all-in-one-for-dummies.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem4/PHP/1.png" alt="c++">
                        <p><b>PHP, MySQL, JavaScript & HTML5 All-in-One For Dummies<br><i>Steve Suehring<br>Janet Valade</i></b><br>Publisher: John Wiley & Sons, Inc.<br>
                            First Edition 2013<br>
                            ISBN: 978-1-118-21370-4, 725 pages
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Previous year Question -->
    <section id="question">
        <div class="container">
            <div class="question">
                <h2>Previous Year Question</h2>
            </div>
            <div class="sem-row">
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_4/Dbms.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_4/dbms.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_4/Design%20analyses%20of%20algorithms.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_4/daa.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_4/Php.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_4/php.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_4/Software%20engineering.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_4/software-engineering.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_4/Sem4.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_4/maths.jpg" alt="descreat">
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