<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semester 2</title>
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
                <button class="sem-btn"><h3>Semester 2</h3></button>
            </div>
            <div class="image">
                <h1>Reference Books</h1>
            </div>
        </div>
    </section>
    <section id="book-list">
        <div class="container sem-row">
            <div>
                <h4>Discreate Structure</h4>
                <div id="left" class="col-4 id">
                    <a href="Contents/Refrence_books/Sem2/Descreat_Maths/1.Descrete_Structure_seventh_edition.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem2/Descreat_Maths/1.png" alt="c++">
                        <p><b>Discrete mathematics and its applications<br><i>Kenneth H. Rosen</i></b><br>Publisher: McGraw-Hill Education<br>
                            First Edition 1984<br>
                            ISBN: 1260091996, 942 pages
                        </p>
                    </a>
                </div>
                <div id="left1" class="col-4 id">
                    <a href="Contents/Refrence_books/Sem2/Descreat_Maths/3.discrete-mathematics-with-applications-4th-edition-by-susanna-epp.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem2/Descreat_Maths/3.png" alt="c++">
                        <p><b>DISCREATE MATHEMATICS<br><i>Seymour Lipschutz<br>
                            Marc Lars Lipson</i></b><br>Publisher: McGraw-Hill<br>
                            First Edition 16 September 2009<br>
                            ISBN: 9780071615860, 503 pages
                        </p>
                    </a>
                </div>
                <div id="right" class="col-4 id">
                    <a href="Contents/Refrence_books/Sem2/Descreat_Maths/2.Discrete_Mathematics_(BCA_Core-4th%20Paper).pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem2/Descreat_Maths/2.png" alt="csa">
                        <p><b>DISCRETE MATHEMATICS WITH APPLICATIONS<br><i>Susanna S. Epp</i></b><br>Publisher: Cengage Learning<br>
                            First Edition 4 August 2010<br>
                            ISBN: 9781133168669, 991 pages
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="book-list2">
        <div class="container sem-row">
            <div>
                <h4>Java</h4>
                <div id="java1" class="col-4 id">
                    <a href="Contents/Refrence_books/Sem2/Java/1.Java_%20A_Beginner's_Guide.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem2/Java/1.png" alt="csa">
                        <p><b>Java™: A Beginner’s Guide<br><i>Herbert Schildt</i></b><br>Publisher: McGraw-Hill<br>
                            First Edition September, 2007<br>
                            ISBN: 1260440222, 720 pages
                        </p>
                    </a>
                </div>
                <div id="java2" class="col-4 id">
                    <a href="Contents/Refrence_books/Sem2/Java/2.Java_All-In-One_Desk_Reference_for_Dummies.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem2/Java/2.png" alt="csa">
                        <p><b>Java™: FOR DUMMIES<br><i>Doug Lowe</i></b><br>Publisher: Wiley Publishing, Inc.<br>
                            First Edition 25 june, 2007<br>
                            ISBN: 9781119680512, 890 pages
                        </p>
                    </a>
                </div>
                <div id="java3" class="col-4 id">
                    <a href="Contents/Refrence_books/Sem2/Java/3.JavaTheCompleteReference.pdf" target="_blank">
                        <img src="Contents/Refrence_books/Sem2/Java/3.png" alt="csa">
                        <p><b>Java™: The Complete Reference<br><i>Herbert Schildt</i></b><br>Publisher: McGraw-Hill<br>
                            First Edition September, 2005<br>
                            ISBN: 9780131757387, 1000 pages
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
                    <a href="Contents/Previus_Year_Question/Sem_2/Discreate%20structure.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_2/ds.jpg" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_2/Prog.%20in%20java.pdf">
                        <div class="q-title">
                            <img src="Contents/Previus_Year_Question/Sem_2/Prog.%20in%20java.png" alt="descreat">
                        </div>
                    </a>
                </div>
                <div class="col-4 id">
                    <a href="Contents/Previus_Year_Question/Sem_2/Sem2.pdf">
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