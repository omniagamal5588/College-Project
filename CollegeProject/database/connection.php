<?php 
function database_connect(){
    mysqli_report( MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT );
    $conn=mysqli_connect('localhost','root','','my_database');
    return $conn;
}
