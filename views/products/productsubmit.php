<?php
require '../../db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');
    $imgName = $_FILES['img']['name'] ?? null;
    $category = trim($_POST['catagoryname'] ?? '');
    $productname = trim($_POST['productname'] ?? '');
    $price = trim($_POST['price'] ?? '');
    $marketprice = trim($_POST['marketprice'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if (!empty($category) && !empty($productname) && !empty($description) && !empty($price) && !empty($marketprice))
    // if (!empty($price))
     {

        $fileOriginalName = $_FILES['img']['name'];
        $tmpname = $_FILES['img']['tmp_name'];
        $uploaddir = './images/';
        $filename = time() . '_' . basename($fileOriginalName);
        if (!is_dir($uploaddir)) {
            mkdir($uploaddir, 0777, true);
        }
        if (move_uploaded_file($tmpname, $uploaddir . $filename)) {
            $sql = "INSERT into products(catagoryid,productname,price,marketprice,descrip,img)values($category,'$productname','$price','$marketprice','$description','$filename')";
            mysqli_query($conn, $sql);
            $_SESSION['msg']='product added successfully';
            // header('location:../dashboard.php');
            // exit;
            $response = [
                'status' => true,
                'message' => 'Data received successfully',
                'img' => $imgName
            ];
            
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Please fill all required fields'
        ];
    }

    echo json_encode($response);
}
