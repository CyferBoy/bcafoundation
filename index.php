<?php
session_start();
require_once ('nav.php');
?>

<!-- Syllabus -->
<section id="syllabus">
    <div class="container">
        <button>
            <a href="Contents/Syllabus for BCA Honours.pdf">BCA Syllabus</a>
        </button>
    </div>
</section>

<!-- books -->
<section id="books">
    <div class="container1 books-row">
        <div class="left">
            <a class="s1" href="sem1.php">sem 1</a>
            <a class="s2" href="sem2.php">sem 2</a>
            <a class="s3" href="sem3.php">sem 3</a>
            <a class="s4" href="sem4.php">sem 4</a>
            <a class="s5" href="sem5.php">sem 5</a>
            <a class="s6" href="sem6.php">sem 6</a>
            <img src="image/course1.png" alt="left" class="margin">
        </div>
       <div class="right">
           <div class="def">
               <h3>Reference Books</h3>
               <span class="square"></span>
               <p>Book which are written so that this can read<br>consecutively for inspiration,
                   enjoyment or information<br>is called ordinary or general book, than books which<br>are design
                   to be consulted or refereed to from time to time,<br>for a specific piece of information, ordinarily
                   these don’t<br>lend themselves to continuous reading.</p>
               <div class="line">
                   <span class="line-1"></span><br>
                   <span class="line-2"></span><br>
                   <span class="line-3"></span>
               </div>
           </div>
       </div>
    </div>
</section>

<section id="features">
    <div class="container">
        <div class="row">
            <div class="features">
                <div class="features-col col-4 float-left">
                    <img src="image/pic-1.png" alt="pic-1">
                    <h4>Learn Anywhere</h4>
                    <p>Switch between your computer, tablet or mobile devices</p>
                </div>
                <div class="features-col col-4 float-left">
                    <img src="image/pic-2.png" alt="pic-2">
                    <h4>Expert Teachers</h4>
                    <p>Learn from industry experts who are passionate about teaching.</p>
                </div>
                <div class="features-col col-4 float-right">
                    <img src="image/pic-3.png" alt="pic-3">
                    <h4>Unlimited Access</h4>
                    <p>Choose what you'd like to learn from our extensive subscription library.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- privius -->
<section id="previus">
    <div class="container1 previus-row">
        <div class="left1">
            <div class="def1">
                <h3>Previous Year Question</h3>
                <span class="square"></span>
                <p>A parliamentary motion to<br>put the pending question to an immediate vote<br>without further debate
                    or amendment<br>that if defeated has the effect of<br>permitting resumption of debate</p>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
        <div class="right1">
            <a class="s01" href="sem1.php#question">sem 1</a>
            <a class="s02" href="sem2.php#question">sem 2</a>
            <a class="s03" href="sem3.php#question">sem 3</a>
            <a class="s04" href="sem4.php#question">sem 4</a>
            <a class="s05" href="sem5.php#question">sem 5</a>
            <a class="s06" href="sem6.php#question">sem 6</a>
            <img src="image/ques.jpg" alt="previus">
        </div>
    </div>
</section>

<?php
require_once ('feedback.php');
require_once ('footer.php');
?>