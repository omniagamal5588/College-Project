<?php
require_once __DIR__ .'/../database/insert.php';
session_start();
$Name='';
$Email='';
$Subject='';
$Phone_Number='';
if(isset($_POST['submit'])){
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Subject=$_POST['Subject'];
$Phone_Number=$_POST['Phone_Number'];
$Message=$_POST['Message'];
database_insert_contact($Name,$Phone_Number,$Email,$Subject,$Message);
echo"Contact Inserted";};
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="AhmedHassan141">
        <meta name="description" content="This is day1 in Responsibility in my bridge to twenty two">
        <title>Responsibility Day1</title>
        <link rel="icon" href="https://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/sign-info-icon.png">
        <script></script>
        <!-- External css -->
        <link rel="stylesheet" href="contact.css">
        <!-- Inernal css -->
        <style></style>
        <!-- Inline css -->
    </head>
    <body>
        <header>
            <p class="p1">Alpha</p>
            <nav>
                <span class="sp1">Hello <?php echo $_SESSION['user']->First_Name ?></span>
                <span class="sp1"><a class="a1" href="../logout.php" >Logout</a></span>
                <span class="sp1"><a class="a1" href="../home1.php" >Home</a></span>
                <span class="sp1"><a class="a1" href="../Treatments/Treatment1.php">Treatments</a></span>
                <span class="sp1"><a class="a1" href="../details/index1.php" >Details</a></span>
                <span class="sp1"><a class="a1" href="../staff/task2221.php" >Staff</a></span>
                <span class="sp1"><a class="a1" href="../clinics/taskk1.php" >Clinic</a></span>
                <span class="sp1"><a class="a1" href="contact1.php">Contact</a></span>
            </nav>
        </header>
        <main>
           <span class="pm1">Tempus nib id</span>
           <br>
           <span class="pm2"> Mauris non Convallis</span>
           <br>  <br> <br> 
        <div class="form1">
           <form action="contact.php" target="_blank" method="post">
            <div class="dm0">
                <input required class="name" type="text" name="Name" placeholder="   Your Name">
            </div>
            <div class="dm1">
                <input required class="email" type="email" name="Email" placeholder="   Email Address">
            </div>
            <br>
            <div class="dm2">
                <input required class="phone" type="tel" name="Phone_Number" placeholder="   Phone Number">
            </div>
            <div class="dm3">
                <input required class="subject" type="text" name="Subject" placeholder="   Subject">
            </div>
            <br>
            <div class="dm4">
                <textarea class="textarea"  name="Message" placeholder="   Write Message"></textarea>
            </div>
            <br><br><br>
            <input required class="sub1"  type="submit" name="submit" value="    Send a Message  ">
           </form>
        </div>
        <br><br>
        <div class="contact2">
            <p class="pfo1">
                <img class="im1" src="contactimgs/email.PNG"> <br>
                <span class="spo1">Email Address</span> <br>
                <span class="spo2">needhelp@company.com</span>
            </p>
            <p class="pfo2">
                <img class="im2"  src="contactimgs/phone.PNG"> <br>
                <span class="spo1">Phone Number</span> <br>
                <span class="spo2">92 666 888 0000</span>
            </p>
            <p class="pfo3">
                <img class="im3"   src="contactimgs/email.PNG"> <br>
                <span class="spo1">Address</span> <br>
                <span class="spo2">80 Broklyn Golden Street New York. USA</span>
            </p>
        </div>


           <br><br><br><br><br>
           <img class="img1" src="contactimgs/projectcollege.PNG" width="1200" height="600">
        </main>


        <footer>
            <div class="fd1">
                <p class="pc1">Pellentesque laoreet lorem ipsum blandit venenatis. Aenean.</p>
                <p class="pc2">92-666 888 000</p>
                <a  class="fa1" href="https://twitter.com/?lang=en" title="Twitter" target="_blank" ><img src="contactimgs/twitter.PNG" width="30" height="30"></a>
                <a class="fa1" href="https://web.facebook.com/" title="facebook" target="_blank"><img src="contactimgs/facebook.PNG" width="30" height="30"></a>
                <a clas="fa1" href="https://www.instagram.com/?hl=en" title="Instagram" target="_blank"><img src="contactimgs/instagram.PNG" width="30" height="30"></a>
                <a class="fa1" href="https://www.youtube.com/" title="Youtube" target="_blank"><img src="contactimgs/youtube.PNG" width="30" height="30"></a>
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