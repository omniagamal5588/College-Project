<?php 
require_once __DIR__ ."/connection.php";
function database_insert_appointment($Name,$Email,$Phone_Number,$Date,$Department,$Message){
    $conn=database_connect();
    $stmt=mysqli_prepare($conn,"insert into appointment(Name,Email,Phone_Number,Date,Department,Message) values(?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'ssssss',$Name,$Email,$Phone_Number,$Date,$Department,$Message);
    mysqli_stmt_execute($stmt);
}
function database_insert_contact($Name,$Phone_Number,$Email,$Subject,$Message){
    $conn=database_connect();
    $stmt=mysqli_prepare($conn,"insert into contact(Name,Phone_Number,Email,Subject,Message) values(?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'sssss',$Name,$Phone_Number,$Email,$Subject,$Message);
    mysqli_stmt_execute($stmt);
}
function database_insert_users($First_Name,$Last_Name,$Email,$Phone_Number,$Password){
    $conn=database_connect();
    $stmt=mysqli_prepare($conn,"insert into users(First_Name,Last_Name,Email,Phone_Number,Password) values(?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'sssss',$First_Name,$Last_Name,$Email,$Phone_Number,$Password);
    mysqli_stmt_execute($stmt);
}
function database_admin_auth($Email,$Password,$Admin_Id){
    $conn=database_connect();
    $stmt=mysqli_prepare($conn,"select * from admin where Email=? and Password=? and Admin_Id=?");
    mysqli_stmt_bind_param($stmt,'sss',$Email,$Password,$Admin_Id);
    mysqli_stmt_execute($stmt);
    $result= mysqli_stmt_get_result($stmt);
    if( mysqli_num_rows($result)>0){
        $user=(object)mysqli_fetch_assoc($result);
    }
    else{
        $user= null;
    }
    return $user;
}
function database_users_auth($Email,$Password){
    $conn=database_connect();
    $stmt=mysqli_prepare($conn,"select * from users where Email=? and Password=?");
    mysqli_stmt_bind_param($stmt,'ss',$Email,$Password);
    mysqli_stmt_execute($stmt);
    $result= mysqli_stmt_get_result($stmt);
    if( mysqli_num_rows($result)>0){
        $user=(object)mysqli_fetch_assoc($result);
        return $user;
    }
    else{
        $user= null;
    }
    return $user;
}
function database_check_email_exists($Email){
    $conn=database_connect();
    $stmt=mysqli_prepare($conn,"select Email from users where Email=?");
    mysqli_stmt_bind_param($stmt,'s',$Email);
    mysqli_stmt_execute($stmt);
    $result= mysqli_stmt_get_result($stmt);
    if( mysqli_num_rows($result)>0){
        return true;
    }
    else{
        return false;
    }
}