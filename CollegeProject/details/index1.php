<?php
require_once __DIR__ .'/../database/insert.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" herf="style.css" />
        <link
            id="u-theme-google-font"
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="./style.css" />
        <title>Details</title>
    </head>
    <body>
        <div class="hero">
            <header class="header">
                <div class="container">
                    <div class="box-logo">
                        <a class="clm" href="index1.php"
                            ><span>+</span>medical</a
                        >
                           <span class="sp1">Hello <?php echo $_SESSION['user']->First_Name ?></span>
                           <span class="sp1"><a class="a1" href="../logout.php" >Logout</a></span>

                    </div>

                    <div class="nav-box">
                        <ul class="nav">
                            <ul class="ul-lest">
                                <li>
                                    <a href="../home1.php">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../Treatments/Treatment1.php">
                                        <span>treatments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index1.php">
                                        <span>details</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="ul-lest">
                                <li>
                                    <a href="../staff/task2221.php">
                                        <i class="fa-solid fa-server"></i>
                                        <span>staff</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../clinics/taskk1.php">
                                        <span>clinic</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../contact/contact1.php">
                                        <span>contact</span>
                                    </a>
                                </li>
                            </ul>
                            <div>
                                <i class="fa-solid fa-xmark close"></i>
                            </div>
                        </ul>
                    </div>
                </div>
            </header>

            <div class="container container-1">
                <div class="box">
                    <h5>Care via phone call</h5>
                    <h1>Request an</h1>
                    <h1>online</h1>
                    <h1>consultation</h1>
                </div>
            </div>
        </div>
        <section class="quisque">
            <div class="container">
                <div class="box-img">
                    <img
                        src="img\Screenshot 2022-09-06 132450.png"
                        alt=""
                    />
                </div>

                <h2>
                    Quisque id tempus nibh, in varius nunc. Mauris non convallis
                    nulla
                </h2>
            </div>
        </section>
        <section class="questions">
            <div class="container">
                <div class="content">
                    <h3>Quisque id tempus nib</h3>
                    <p>
                        Fusce tortor est, rutrum id phar etra ut, lobortis et
                        odio. Sed a arcu accumsan, porta ante ut, pulvinar
                        magna. Fusce tortor est, rutrum id pharetra ut, lobortis
                        et odio. Sed a arcu accumsan, porta ante ut, pulvinar
                        magna. Phasellus a arcu lorem. Donec placerat mollis
                        tellus
                    </p>
                </div>
                <div class="box-question">
                    <div class="box">
                        <div class="title">
                            <h3>Frequent Question #1</h3>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="title">
                            <h3>Frequent Question #2</h3>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="title">
                            <h3>Frequent Question #3</h3>
                            <i class="fa-solid fa-angle-up"></i>
                        </div>

                        <p>
                            There are many variations of passages the majority
                            have suffered alteration in some fo injected humour,
                            or randomised words believable.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="talk-doc">
            <div class="container">
                <div class="content">
                    <h3>Ask about your symptoms</h3>
                    <h1>Talk to a doctor.</h1>
                    <p>
                        Fusce tortor est, rutrum id pharetra ut, lobortis et
                        odio. Sed a arcu accumsan, porta ante ut, pulvinar
                        magna. Quisque id tempus nibh, in varius nunc. Mauris
                        non convallis nullateus.
                    </p>
                </div>
                <div class="box-info">
                    <div class="box-img">
                        <img
                            src="img\Screenshot 2022-09-06 132421.png"
                            alt=""
                        />
                    </div>

                    <p>
                        Fusce tortor est, rutrum id pharetra ut, lobortis et
                        odio. Sed a arcu accumsan, porta ante ut, pulvinar
                        magna. Quisque id tempus nibh, in varius nunc. Mauris
                        non convallis nulla. Morbi at urna hendrerit, finibus
                        justo a, pellentesque diam.
                    </p>
                    <p>
                        Vivamus lacus metus, placerat ullamcorper turpis et,
                        rutrum finibus mauris. Sed consequat ultricies posuere.
                    </p>
                </div>
            </div>
            <div class="container container-1">
                <div class="content"></div>
                <div class="box-info">
                    <div class="box">
                        <h3>Ask about your symptoms</h3>
                        <h1>Choose a prescription</h1>
                        <h1>delivery method</h1>
                    </div>

                    <p>
                        Fusce tortor est, rutrum id pharetra ut, lobortis et
                        odio. Sed a arcu accumsan, porta ante ut, pulvinar
                        magna. Quisque id tempus nibh, in varius nunc. Mauris
                        non convallis nulla. Morbi at urna hendrerit, finibus
                        justo a, pellentesque diam.
                    </p>
                    <p>
                        Vivamus lacus metus, placerat ullamcorper turpis et,
                        rutrum finibus mauris. Sed consequat ultricies posuere.
                    </p>
                </div>
            </div>
        </div>
        <section class="doc-img-name">
            <div class="doc-img">
                <img src="img\WhatsApp Image 2022-09-05 at 8.00.32 PM (1).jpeg">
            </div>
            <div class="txt">
                <p>Quisque id tempus nib</p>
                <p class="doc-name">Dr. Kevin Martin</p>
                <p class="violet-p">Fusce tortor est, rutrum id phar etra ut, lobortis et odio. Sed a arcu accumsan, porta ante ut, pulvinar magna.</p>
                <p class="down-p">Quisque id tempus nibh, in varius nunc. Mauris non convallis nulla. Morbi at urna hendrerit, finibus justo a, pellentesque diam. Vivamus lacus metus, placerat ullamcorper turpis et, rutrum finibus mauris. Sed consequat ultricies posuere.</p>
            </div>
        </section>
        <section class="feedback">
               <p>Hospital & Clinic Feedback</p>
               <h2>What patients say</h2>
               <div class="jane">
                <p>I was very impresed by the company povash services lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia.</p>
                <div class="portfolio">
                    <img src="img\WhatsApp Image 2022-09-05 at 8.00.32 PM (2).jpeg" class="jane-img">
                    <div class="text">
                        <h3>Jane Bleymour</h3>
                        <h5>Customer</h5>
                    </div>
                </div>                
               </div>
               <div class="mike">
                <p>I was very impresed by the company povash services lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia.</p>
                <div class="portfolio">
                    <img src="img\WhatsApp Image 2022-09-05 at 8.00.32 PM.jpeg" class="mike-img">
                    <div class="text">
                        <h3>Mike Hardson</h3>
                        <h5>Customer</h5>
                    </div>
                </div>                
               </div>
        </section>
        <footer>
            <div class="fd1">
                <p class="pc1">Pellentesque laoreet lorem ipsum blandit venenatis. Aenean.</p>
                <br>
                <p class="pc2">92-666 888 000</p>
            </div>
            <div class="fd2">
                <p class="pc1">Services</p>
                <br>
                <p>&gt;&nbsp;&nbsp;Alicuam ac dui</p>
                <p>&gt;&nbsp;&nbsp;Vel dui vulputate</p>
                <p>&gt; &nbsp;&nbsp; Mauris accumsan</p>
                <p>&gt; &nbsp;&nbsp; Consectetur</p>
            </div>
            <div class="fd3">
                <p class="pc1">Medical Staff</p>
                <br>
                <p>Fusce tortor est, rutrum id phar<p>
                <p>etra ut, lobortis et odio. Sed a<p>
                <p>arcu accumsan, porta ante ut,</p>
                <p>pulvinar magna.<p>
            </div>
            <div class="fd4">
                <p class="pc1">Contact</p>
                <br>
                <p>&gt;&nbsp;&nbsp;Alicuam ac dui</p>
                <p>&gt;&nbsp;&nbsp;Vel dui vulputate</p>
                <p>&gt; &nbsp;&nbsp; Mauris accumsan</p>
                <p>&gt; &nbsp;&nbsp; Consectetur</p>
            </div>
            <br><br>
            <p class="pc4">©copyright Medical theme / All Rights Reserved 2021</p>
        </footer>
        
    </body>
</html>
