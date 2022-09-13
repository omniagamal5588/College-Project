<?php
require_once __DIR__ .'/../database/insert.php';
session_start();
if(isset($_SESSION['user'])){
    header('location:../home1.php');
    exit;
}
$Password='';
$Email='';
$error='';
if(isset($_POST['submit'])){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $user=database_users_auth($Email,$Password);
    if($user === null){
        $error='wrong Email or Password';
    }
    else{
        $_SESSION['user']=$user;
        header('location:../home1.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
            <title>login form</title>
            <link rel="stylesheet" href="style.css"> 
            <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css">
</head>
<body>
    <header>
        <nav>
            <div class="log">
                <img src="./logo.png" class="logo"></div>
            <div class="menu">
                <ul>
                    <li><a href="../login-user/userLogin.php">Login</a></li>
                    <li><a href="../forms/index.php">Sign Up</a></li> 
                    <li><a href="../home.php">Home</a></li>  
                    <li><a href="../Treatments/Treatment.php">Treatments</a></li> 
                    <li><a href="../details/index.php">Details</a></li>
                    <li><a href="../staff/task222.php">Stuff</a></li> 
                    <li><a href="../clinics/taskk.php">Clinic</a></li>
                    <li><a href="../contact/contact.php">Contact</a></li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <div class="part-one">
        <form class="login" action="userLogin.php" method="post">
            <span class="user"><i class="fas fa-users"></i></span>
            <label class="e-mail">e-mail</label>
                 <input required type="text" placeholder=" Enter Your e-mail" class="e-mai" name="Email">
                 <label class="password">Password</label>
                 
                 <input required type="password" placeholder=" Enter Your Password"  class="pass" name="Password">
                 
                     <button type="submit" name="submit" formmethod="post">Login</button>
                 
           </form>
</body>
</html>