
<section id="feedback">
    <div class="container form-row">
        <div class="left1">
            <img src="image/contact.png" alt="feedback">
        </div>
        <div class="right1">
            <div class="input">
                <div class="form-margin">
                    <h1>Please give us your<br>thoughtful opinion</h1>
                    <form action="feedback.php" method="post">
                        <label>
                            <input type="text" name="name" placeholder="Enter name">
                        </label>
                        <label>
                            <input type="email" name="email" placeholder="Enter email">
                        </label>
                        <label>
                            <textarea name="feedback" cols="8" rows="4"></textarea>
                        </label>
                        <div class="btn-box">
                            <label>
                                <input type="submit" name="submit" class="btn-seg" value="Submit">
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'bca_foundation');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $sub = "insert into feedback (name, email, feedback) value ('$name', '$email', '$feedback')";
    $result = mysqli_query($con, $sub);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        echo "<script>alert('your feedback is submitted')</script>";
        header('location:index.php');
    }
    else{
        echo "<script>alert('oops! There is some Problem!')</script>";
        header('location:index.php');
    }

}
?>