<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semester 6</title>
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
                <button class="sem-btn"><h3>Semester 6</h3></button>
            </div>
            <div class="image">
                <h1>Reference Books</h1>
            </div>
        </div>
    </section>
    <section id="book-list">
        <div class="container sem-row">
            <div>
                <h4>Text Books</h4>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem6/Artificial%20Intelligence/1.rest.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem6/Artificial%20Intelligence/1.jpg" alt="c++">
                        <p><b>Artificial Intelligence<br><i>P.H. Winston</i></b><br>Publisher: Pearson Education<br>
                            Third Edition 2006<br>
                            ISBN: 9780201600865, 737 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem6/Computer%20Graphics/1.Computer%20Graphics-%20Principles%20and%20Practice%20(%20PDFDrive%20).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem6/Computer%20Graphics/1.jpg" alt="c++">
                        <p><b>Computer Graphics<br><i>JOHN F. HUGHES<br>JAMES D. FOLEY<br>ANDRIES VAN DAM</i></b><br>Publisher: Pearson Education<br>
                            Third Edition 2014<br>
                            ISBN: 978-0-321-39952-6, 1263 pages
                        </p>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Refrence_books/Sem6/Data%20Mining/1.The-Morgan-Kaufmann-Series-in-Data-Management-Systems-Jiawei-Han-Micheline-Kamber-Jian-Pei-Data-Mining.-Concepts-and-Techniques-3rd-Edition-Morgan-Kaufmann-2011.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem6/Data%20Mining/1.png" alt="c++">
                        <p><b>Data Mining Concepts & Techniques<br><i>Jiawei Han<br>Jian Pei<br>Micheline Kamber</i></b><br>Publisher: Elsevier<br>
                            Third Edition 2011<br>
                            ISBN: 978-0-12-381479-1, 740 pages
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
                    <a href="Contents/Previus_Year_Question/Sem_6/Aartificial%20intelligence.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_6/ai.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_6/Ccomputer%20graphics.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_6/computer%20graphics.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_6/Data%20minig.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_6/data%20mining.jpg" alt="descreat">
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