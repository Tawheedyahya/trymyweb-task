<?php
require '../db.php';
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $catagoryid=trim($_POST['catagoryname']);
    if(empty($catagoryid)){
        echo "it will be empty";
    }
    else{
        $sql="DELETE from catagories where id=$catagoryid";
        if(mysqli_query($conn,$sql)){
            $_SESSION['msg']='successfully deleted';
            header('location:dashboard.php');
        }
        // echo $catagoryname;
    }
}
?>