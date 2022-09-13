<?php
require_once __DIR__ .'/../database/insert.php';
if(isset($_POST['submit'])){
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Date=$_POST['Date'];
$Department=$_POST['Department'];
$Phone_Number=$_POST['Phone_Number'];
$Message=$_POST['Message'];
database_insert_appointment($Name,$Email,$Phone_Number,$Date,$Department,$Message);
echo"Apointment Inserted";};
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
        <link rel="stylesheet" href="Treatment.css">
        <!-- Inernal css -->
        <style></style>
        <!-- Inline css -->
    </head>
    <body>
        <header>
            <p class="p1">Alpha</p>
            <nav>
                <span class="sp1"><a class="a1" href="../login-user/userLogin.php" >Login</a></span>
                <span class="sp1"><a class="a1" href="../forms/index.php" >Sign up</a></span>
                <span class="sp1"><a class="a1" href="../home.php">Home</a></span>
                <span class="sp1"><a class="a1" href="Treatment.php">Treatments</a></span>
                <span class="sp1"><a class="a1" href="../details/index.php" >Details</a></span>
                <span class="sp1"><a class="a1" href="../staff/task222.php" >Staff</a></span>
                <span class="sp1"><a class="a1" href="../clinics/taskk.php" >Clinic</a></span>
                <span class="sp1"><a class="a1" href="../contact/contact.php">Contact</a></span>
            </nav>
        </header>
        <main>
            <section class="sec1">
                <p class="pm1">
                <span class="spm1">Check out our:</span>
                <br>
                <span class="spm2">Services for everyone</span>
                </p>
                <br>
                <p class="pm4"> <img class="img3" src="imgss/img3.PNG"></p>
                <p class="pm3"><span class="spm3">Call us now:</span> <span class="spm4">92 666 888 0000</span></p>
            </section>
            <section class="sec2">
                <div class="dsec1">
                    <div class="dsec11">
                        <br><br>
                        <img src="imgss/ip1.PNG" width="100px" height="85px">
                        <p class="sk1">Skin Conditions</p>
                        <p class="pa1">Fusce tortor est, rutrum id
                        <br>phar etra ut, lobortis et odio.
                        <br>Sed a arcu accumsan, porta
                        <br>ante ut, pulvinar magna.
                        </p>
                        <p>
                            <form>
                                <input class="sef1" type="submit" value="Contact Us">
                            </form>
                        </p>
                    </div>
                    <div class="dsec11">
                        <br><br>
                        <img src="imgss/ip2.PNG"  width="100px" height="85px">
                        <p class="sk1">Urinary Tract</p>
                        <p class="pa1">Fusce tortor est, rutrum id
                        <br>phar etra ut, lobortis et odio.
                        <br>Sed a arcu accumsan, porta
                        <br>ante ut, pulvinar magna.
                        </p>
                        <p>
                            <form>
                                <input class="sef1" type="submit" value="Contact Us">
                            </form>
                        </p>
                    </div>
                    <div class="dsec11">
                        <br><br>
                        <img src="imgss/ip3.PNG"  width="100px" height="85px" >
                        <p class="sk1">Sore Throat</p>
                        <p class="pa1">Fusce tortor est, rutrum id
                        <br>phar etra ut, lobortis et odio.
                        <br>Sed a arcu accumsan, porta
                        <br>ante ut, pulvinar magna.
                        </p>
                        <p>
                            <form>
                                <input class="sef1" type="submit" value="Contact Us">
                            </form>
                        </p>
                    </div>
                </div>
                <div class="dsec1">
                    <div class="dsec11">
                        <br><br>
                        <img src="imgss/ip4.PNG" width="100px" height="85px">
                        <p class="sk1">Nausea and Vomiting</p>
                        <p class="pa1">Fusce tortor est, rutrum id
                        <br>phar etra ut, lobortis et odio.
                        <br>Sed a arcu accumsan, porta
                        <br>ante ut, pulvinar magna.
                        </p>
                        <p>
                            <form>
                                <input class="sef1" type="submit" value="Contact Us">
                            </form>
                        </p>
                    </div>
                    <div class="dsec11">
                        <br><br>
                        <img src="imgss/ip5.PNG"  width="100px" height="85px">
                        <p class="sk1">Abdominal Pain</p>
                        <p class="pa1">Fusce tortor est, rutrum id
                        <br>phar etra ut, lobortis et odio.
                        <br>Sed a arcu accumsan, porta
                        <br>ante ut, pulvinar magna.
                        </p>
                        <p>
                            <form>
                                <input class="sef1" type="submit" value="Contact Us">
                            </form>
                        </p>
                    </div>
                    <div class="dsec11">
                        <br><br>
                        <img src="imgss/ip6.PNG"  width="100px" height="85px" >
                        <p class="sk1">Sinus Infection</p>
                        <p class="pa1">Fusce tortor est, rutrum id
                        <br>phar etra ut, lobortis et odio.
                        <br>Sed a arcu accumsan, porta
                        <br>ante ut, pulvinar magna.
                        </p>
                        <p>
                            <form>
                                <input class="sef1" type="submit" value="Contact Us">
                            </form>
                        </p>
                    </div>
                </div>
                <div class="dsec2">

                </div>
            </section>
            <br><br><br><br><br><br>

            <section class="app1">
                <img src="imgss/app1.PNG" width="1500" height="800">
                <br><br>
                <img src="imgss/app2.PNG" height="100px">
                <form target="_blank" method="post" action="Treatment.php">
                    <div class="spa0">
                        <br><br><br>
                        &nbsp; &nbsp; &nbsp;
                        <span class="spa1">Name</span>
                        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                        <span class="spa1">Email</span>
                        <br>
                        &nbsp; &nbsp; &nbsp;
                        <span><input class="spa2" name="Name"  type="text"  placeholder="&nbsp;Full Name"></span>
                        &nbsp; &nbsp; &nbsp;
                        <span><input class="spa2" name="Email" type="email"  placeholder="&nbsp;Your Email"></span>
                        <br><br>
                        &nbsp; &nbsp; &nbsp;
                        <span class="spa1">Select Date</span>
                        &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                        <span class="spa1">Select Department</span>
                        <br>
                        &nbsp; &nbsp; &nbsp;
                        <span><input class="spa2" name="Date"  type="date"  placeholder="&nbsp;mm/dd/yyyy"></span>
                        &nbsp; &nbsp; &nbsp;
                        <span><input class="spa2" name="Department"  type="text" list="depa" placeholder="&nbsp;General Health"></span>
                        <datalist id="depa">
                            <option value="Cardiology"></option>
                            <option value="Dental"></option>
                            <option value="Medical Research"></option>
                        </datalist>
                        <br><br>
                        &nbsp; &nbsp; &nbsp;
                        <span class="spa3">Phone Number</span>
                        <br>
                        &nbsp; &nbsp; &nbsp;
                        <span><input class="spa33" name="Phone_Number" type="text" placeholder="&nbsp;Phone"></span>
                        &nbsp; &nbsp; &nbsp;
                        <br><br>
                        &nbsp; &nbsp; &nbsp;
                        <span class="spa3">Additional Message</span>
                        <br>
                        &nbsp; &nbsp; &nbsp;
                        <span><textarea class="spa333" name="Message" placeholder="&nbsp;Message"></textarea></span>
                        &nbsp; &nbsp; &nbsp;
                        <br><br>
                        &nbsp; &nbsp; &nbsp;
                        <input class="su1" type="reset" value="Reset">
                        &nbsp; &nbsp; &nbsp;
                        <button  class="su1" type="submit" formmethod="post"  name="submit">Submit</button>
                    </div>
                </form>
                <br><br><br><br>
                <img src="imgss/appointment.PNG" width="1500" height="800">
            </section>
        </main>
        <br><br><br><br><br><br>
        <footer>
            <div class="fd1">
                <p class="pc1">Pellentesque laoreet lorem ipsum blandit venenatis. Aenean.</p>
                <p class="pc2">92-666 888 000</p>
                <a  class="fa1" href="https://twitter.com/?lang=en" title="Twitter" target="_blank" ><img src="imgss/twitter.PNG" width="30" height="30"></a>
                <a class="fa1" href="https://web.facebook.com/" title="facebook" target="_blank"><img src="imgss/facebook.PNG" width="30" height="30"></a>
                <a clas="fa1" href="https://www.instagram.com/?hl=en" title="Instagram" target="_blank"><img src="imgss/instagram.PNG" width="30" height="30"></a>
                <a class="fa1" href="https://www.youtube.com/" title="Youtube" target="_blank"><img src="imgss/youtube.PNG" width="30" height="30"></a>
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
