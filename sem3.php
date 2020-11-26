<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semester 3</title>
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
                <button class="sem-btn"><h3>Semester 3</h3></button>
            </div>
            <div class="image">
                <h1>Reference Books</h1>
            </div>
        </div>
    </section>
    <section id="book-list">
        <div class="container sem-row">
            <div>
                <h4>Computer Networks</h4>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem3/Computer_Networks/1.Computer_Networks_5th_ed.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem3/Computer_Networks/1.png" alt="c++">
                        <p><b>COMPUTER NETWORKS<br><i>Andrew S. Tanenbaum<br>David J. Wetherall</i></b><br>Publisher: Pearson Education<br>
                            Fifth Edition 2012<br>
                            ISBN: 0133072622, 960 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem3/Computer_Networks/2.Data.And.Computer.Communications.8e.WilliamStallings.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem3/Computer_Networks/2.png" alt="c++">
                        <p><b>DATA AND COMPUTER COMMUNICATIONS<br><i>William Stallings</i></b><br>Publisher: Pearson Education<br>
                            Eighth Edition September 2007<br>
                            ISBN: 9788131715369, 900 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem3/Computer_Networks/3.Data_Communications_and_Networking.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem3/Computer_Networks/3.png" alt="c++">
                        <p><b>DATA COMMUNICATIONS AND NETWORKING<br><i>Behrouz A. Forouzan<br>Sophia Chung Fegan</i></b><br>Publisher: McGraw-Hill<br>
                            Fourth Edition September 2007<br>
                            ISBN: 9780072967753, 1134 pages
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="book-list2">
        <div class="container sem-row">
            <div>
                <h4>Operating System & Data Structure</h4>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem3/Operating_System/1.Abraham-Silberschatz-Operating-System-Concepts---9th2012.12.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem3/Operating_System/1.png" alt="c++">
                        <p><b>OPERATING SYSTEM CONCEPTS<br><i>Abraham Silberschatz<br>Peter B. Galvin<br>Greg Gagne</i></b><br>Publisher: Wiley<br>
                            Ninth Edition 2012<br>
                            ISBN: 1118129385, 944 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem3/Operating_System/2.Operating.Systems.4th.Edi.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem3/Operating_System/2.png" alt="c++">
                        <p><b>MODERN OPERATING SYSTEMS<br><i>ANDREW S. TANENBAUM<br>HERBERT BOS</i></b><br>Publisher: Pearson Education<br>
                            Fourth Edition 2008<br>
                            ISBN: 978-0-13-359162-0, 1140 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem3/Data_Structure/1.data%20structures%20using%20C%20%20''%20v.%20v.%20das''%20%20%202008.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem3/Data_Structure/1.png" alt="c++">
                        <p><b>Principles of Data Structures Using C and C++<br><i>Vinu V. Das</i></b><br>Publisher: New Age International (P) Limited<br>
                            First Edition 2006<br>
                            ISBN: 9788122418583, 376 pages
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
                <div class="question">
                    <h2>Previous Year Question</h2>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_3/Comp.%20networking.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_3/computer%20networking.png" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_3/Data%20strc..pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_3/data%20structure.png" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_3/Operating%20system.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_3/operating%20system.png" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_3/Soft.%20test.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_3/soft.%20test.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_3/Sem3.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_3/maths.jpg" alt="descreat">
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