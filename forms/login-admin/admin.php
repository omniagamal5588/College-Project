<?php
require_once __DIR__ .'/../../database/insert.php';
if(isset($_POST['submit'])){
$Email=$_POST['Email'];
$Password=$_POST['Phone_Number'];
$Admin_Id=$_POST['Admin_Id'];
database_admin_auth($Email,$Password,$Admin_Id);
echo"Login Success";};
?>
<!DOCTYPE html>
<head>
        <meta charset="utf-8">
            <title>sign up login form</title>
            <link rel="stylesheet" href="stylee.css"> 
            <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css">
</head>
    <body>
        <header>
            <nav>
                <div class="log">
                    <img src="./logo.png" class="logo"></div>
                <div class="menu">
                    <ul>
                        <li><a href="../home.php">Home</a></li>  
                        <li><a href="../Treatments/Treatment.php">Treatments</a></li> 
                        <li><a href="">Details</a></li> 
                        <li><a href="../staff/task222.php">Stuff</a></li> 
                        <li><a href="taskk.php">Clinic</a></li>
                        <li><a href="../contact/contact.php">Contact</a></li> 
                    </ul>
                </div>
            </nav>
        </header>
        <div class="part-one">
            <form class="login">
                
                <span class="user"><i class="fas fa-users-cog"></i></span>
                
                <label class="e-mail">e-mail</label>
                
                     <input type="text" placeholder="Enter Your e-mail" class="e-mai" name="Email">
                        <label class="password">Password</label>
                              <input type="password" placeholder="Enter Your Password"  class="pass" name="Password">
                                     <label class="id">ID</label>
                                             <input type="password" placeholder="Enter Your ID"  class="secure" name="Admin_Id">
                                                <button type="submit" name="submit" formmethod="post">Login</button>
                    
               </form>
    </body>
