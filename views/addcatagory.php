<?php
require '../db.php';
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $catagoryname=trim($_POST['catagoryname']);
    if(empty($catagoryname)){
        echo "it will be empty";
    }
    else{
        $sql="INSERT into catagories(name) values('$catagoryname')";
        if(mysqli_query($conn,$sql)){
            $_SESSION['msg']='successfully added';
            header('location:dashboard.php');
        }
    }
}
?>