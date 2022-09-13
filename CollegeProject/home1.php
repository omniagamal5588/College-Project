<?php
require_once __DIR__ .'/database/insert.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <title>Medical Clinic</title>
    <meta name="Medical Clinic" content="Best Medical Services & Clinic Care & Experienced medical staff & modern facilities">
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" href="https://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/sign-info-icon.png">
 </head>
 <body>
    <header>
       
        <div class="d1">
            <br>
            <span class="sp1"><a class="a1" href="home1.php" >Home</a></span>
            <span class="sp1"><a class="a1" href="Treatments/Treatment1.php" >Treatments</a></span>
            <span class="sp1"><a class="a1" href="details/index1.php" >Details</a></span>
            <span class="sp1"><a class="a1" href="staff/task2221.php">Staff</a></span>
            <span class="sp1"><a class="a1" href="clinics/taskk1.php">Clinic</a></span>
            <span class="sp1"><a class="a1" href="contact/contact1.php">Contact</a></span>
        </div>
        <div class="x">
            <br>
            <span class="sp1">Hello <?php echo $_SESSION['user']->First_Name ?></span>
            <span class="sp1"><a class="sp22" href="logout.php" >Logout</a></span>
            <h2 >Welcome to our hospital</h2>
            <h1>Best Medical Services & Clinic Care</h1>
        </div>
    </header>
    <div class="a5">
    </div>
    <div class="a6">
        <h2>Doctors to help you</h2>
        <h1>Experienced medical staff & modern facilities</h1>
    </div>
    <div class="a7">
        <h2>High tech services</h2>
        <h1>Covid testing and gene editing. Fast results</h1>
        <h2>Fusce tortor est, rutrum id phar etra ut, lobortis et odio.</h2>
        <button type="button" class="button">
            <span class="button--text">DISCOVER MORE</span>
        </button>
    </div>
    <div class="a8">
    </div>
    <div class="b1">
        <div><div class="b2">
            <center><image src="pills.png" alt="Pills"></image></center>
            <center><h1>Pills prescribe for most cases</h1></center>
            <center><button type="button" class="button1">
                <span class="button--text">READ MORE</span>
            </button></center>
        </div>
        <div class="b3"><center><image src="training.png" alt="Pills"></image></center>
            <center><h1>Cardio & Phisio Training</h1></center>
            <center><button type="button" class="button1">
                <span class="button--text">READ MORE</span>
            </button></center></div></div>
        <div><div class="b4"><center><image src="medical_care.png" alt="training"></image></center>
            <center><h1>Complete care and medical</h1></center>
            <center><button type="button" class="button1">
                <span class="button--text">READ MORE</span>
            </button></center></div>
        <div class="b5"><center><image src="treatment.png" alt="treatment"></image></center>
            <center><h1>Advanced Treatments</h1></center>
            <center> <button type="button" class="button1">
                <span class="button--text">READ MORE</span>
            </button></center></div></div>
    </div>
    <div class="b6" ></div>
    </div>><div class="b7"><h2>Stomtology care</h2>
    <h1>Furce tortor est rutrum id </h1>
    <h1> pharetra scelerique lacus non</h1>
    <div class="b8">
    <center><span class="num" data-val="360">000</span></center>
        <p class="text">Smiling Clients & Happy kids</p></div>
    <div class="b9">
       <center> <span class="num" data-val="720">000</span></center>
        <p class="text" >Appoinments to date in 2021</p></div>
    </div>
</div>
<script src=js/home.js></script>
<div class="b13">
    <div class="b10"><div class="b14"><image src="menu_sequre.png" alt="menu"></image></div><div class="b15"><h1>Ways I can improve my health this year?</h1><h2>Class aptent tacati sociu ad itora torquent perra</h2></div></div>
    <div class="b11"><div class="b16"><image src="stroke_miter.png" alt="stroke"></image></div><div class="b17"><h1>What is autopay & how do I set it up?</h1><h2>Class aptent tacati sociu ad itora torquent perra</h2></div></div>
    <div class="b12"><div class="b18"> <image src="pill_container.png" alt="pill_container"></image></div><div class="b19"><h1>What is autopay & how to set it up?</h1><h2>Class aptent tacati sociu ad itora torquent perra</h2></div></div>
</div>


    <footer>
        <div class="fd1">
            <p class="pc1">Pellentesque laoreet lorem ipsum blandit venenatis. Aenean.</p>
            <p class="pc2">92-666 888 000</p>
            <a  class="fa1" href="https://twitter.com/?lang=en" title="Twitter" target="_blank" ><img src="twitter.PNG" width="30" height="30"></a>
            <a class="fa1" href="https://web.facebook.com/" title="facebook" target="_blank"><img src="facebook.PNG" width="30" height="30"></a>
            <a clas="fa1" href="https://www.instagram.com/?hl=en" title="Instagram" target="_blank"><img src="instagram.PNG" width="30" height="30"></a>
            <a class="fa1" href="https://www.youtube.com/" title="Youtube" target="_blank"><img src="youtube.PNG" width="30" height="30"></a>
        </div>
        <div class="fd2">
            <p class="pc1">Services</p>
            <p>&gt;&nbsp;&nbsp;Alicuam ac dui</p>
            <p>&gt;&nbsp;&nbsp;Vel dui vulputate</p>
            <p>&gt; &nbsp;&nbsp; Mauris accumsan</p>
            <p>&gt; &nbsp;&nbsp; Consectetur</p>
        </div>
        <div class="fd3">
            <p class="pc1">Medical Staff</p>
            <p>Fusce tortor est, rutrum id phar<p>
            <p>etra ut, lobortis et odio. Sed a<p>
            <p>arcu accumsan, porta ante ut,</p>
            <p>pulvinar magna.<p>
        </div>
        <div class="fd4">
            <p class="pc1">Contact</p>
            <p>&gt;&nbsp;&nbsp;Alicuam ac dui</p>
            <p>&gt;&nbsp;&nbsp;Vel dui vulputate</p>
            <p>&gt; &nbsp;&nbsp; Mauris accumsan</p>
            <p>&gt; &nbsp;&nbsp; Consectetur</p>
        </div>
        <p class="pc4">©copyright Medical theme / All Rights Reserved 2021</p>
    </footer>
 </body>
</html>
    