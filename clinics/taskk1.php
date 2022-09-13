<?php
require_once __DIR__ .'/../database/insert.php';
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="taskk.css">
        <link rel="stylesheet" href="../templete3/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    </head>
        <body>
            <header>
                <nav>
                    <div class="log">
                        <img src="img/logo.png" class="logo"></div>
                    <div class="menu">
                        <ul>
                            <li><a href="../logout.php">Logout</a></li>
                            <li>Hello <?php echo $_SESSION['user']->First_Name ?></li>
                            <li><a href="../home1.php">Home</a></li>  
                            <li><a href="../Treatments/Treatment1.php">Treatments</a></li> 
                            <li><a href="../details/index1.php">Details</a></li> 
                            <li><a href="../staff/task2221.php">Stuff</a></li>
                            <li><a href="../clinics/taskk1.php">clinics</a></li> 
                            <li><a href="../contact/contact1.php">Contact</a></li>
                            
                              
                        </ul>
                    </div>
                </nav>
            </header>
            <!------------------------------------------------------------------------->
              <!--  
            <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
            <script>
                $(window).scroll(function()
                {
                                 if($(window).scrollTop())
                {   
                    $("nav").addClass("white");


                }  
                 else
                {
                   $("nav").removeClass("white");   
                }

                });
            </script>
        -->
            <!-------------------------------------------------------------------------->
                <div class="first-part"> 
                     
                    <div class="color">

                    </div>   
                
                   <p class="qui">Quisque id tempus nib</p>
                   <p class="aliq">Aliquam cursus neque quis sollicitudin vestibulum</p>
                </div>
                <br><br><br><br><br>
                <!-- ------------------------------------------------- -->
                <div class="second-part">
                    <img src="./img/img1.jpg">
                    <div class="blu">
                        <span>Lorem ipsum</span>
                        <p>Fusce tortor est, rutrum id pharetra ut, 
                            lobortis et odio. Sed a arcu accumsan,
                             porta ante ut, pulvinar magna.
                              Quisque id tempus nibh, 
                            in varius nunc.</p>

                    </div>
                </div>
                <!------------------------------------------------------------->
                <div class="third-part">
                    <img src="./img/img2.jpg">
                        <div class="morbi">
                            <p>Morbi venenatis metus</p>
                            <div>Fusce tortor est, rutrum id pharetra ut, lobortis et odio. 
                                Sed a arcu accumsan, porta ante ut, pulvinar magna. 
                                Quisque id tempus nibh, in varius nunc.</div>
                        </div>
                </div>
                <!----------------------------------------------------------->
                    <div class="fourth-part">
                        <img src="./img/img2.jpg">
                            <div class="fusce">
                                <p>Fusce et ornare turpis</p>
                                    <div>Fusce tortor est, rutrum id pharetra ut, lobortis et odio.
                                         Sed a arcu accumsan, porta ante ut, pulvinar magna. 
                                        Quisque id tempus nibh, in varius nunc.</div>

                            </div>   
                            <!-------------------------------------------------------------->
                                <div class="fifth-part">
                                    <img src="./img/img3.jpg">
                                    <div class="lorem">  
                                        <p>
                                            Lorem ipsum
                                        </p>
                                        
                                    <div>
                                        Fusce tortor est, 
                                        rutrum id pharetra ut, lobortis et odio.
                                         Sed a arcu accumsan, porta ante ut, pulvinar magna. 
                                        Quisque id tempus nibh, in varius nunc.
                                     </div>
                                    
                                    </div>
                                </div>
                    
                    </div>
                    <br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
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