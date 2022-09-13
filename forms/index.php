<?php
require_once __DIR__ .'/../database/insert.php';
session_start();
if(isset($_SESSION['user'])){
    header('location:../home1.php');
    exit;
}

$Email='';
$Password='';
$Last_Name='';
$Phone_Number='';
$error_email='';
if(isset($_POST['submit'])){
    $First_Name=$_POST['First_Name'];
    $Last_Name=$_POST['Last_Name'];
    $Email=$_POST['Email'];
    $Phone_Number=$_POST['Phone_Number'];
    $Password=$_POST['Password'];
    if(database_check_email_exists($Email)){
        $error_email='This Email Exists';
    }
    if(!$error_email){
    $user=database_insert_users($First_Name,$Last_Name,$Email,$Phone_Number,$Password);
    $_SESSION['user']=$user;
    header('location:../login-user/userLogin.php');
    echo"Registerd Successfully";
    exit;
    }
};
?>
<!DOCTYPE html>
<head>
        <meta charset="utf-8">
            <title>sign up login form</title>
            <link rel="stylesheet" href="stylesheet.css"> 
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
        <form class="sign-up" method="post" action="index.php" target="_blank" >
           <span class="sign">Sign up </span>
           
                <label class="first-name">First Name</label>
                    <input required type="text" placeholder=" Enter your first name" class="name" name="First_Name">
                        <label class="last-name">Last Name</label>
                            <input required type="text" placeholder=" Enter your last name"  class="last-nam" name="Last_Name">       
                            <label class="e-mail">E-mail</label>
                            <input required type="text" placeholder=" Enter your e-mail" class="e-ma" name="Email">
                            <label class="phone-num">Phone Number</label>
                            <input required type="text" placeholder=" Enter your phone number"  class="phone-n" name="Phone_Number">
                            <label class="password">Password</label>
                            <input required type="password" placeholder=" Enter the password" class="pass" name="Password">
                                <button type="submit" name="submit" formmethod="post">Submit</button>
                    
                   
                            
                
        </form>
    </div>

</body>