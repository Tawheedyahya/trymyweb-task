<?php
$conn = new mysqli('localhost', 'root', '', 'inter');
if(!$conn){
    header('location:error.html');
}
function catagory(){
   $conn = new mysqli('localhost', 'root', '', 'inter');
   $sql='SELECT * from catagories';
   $result=mysqli_query($conn,$sql);
   return $result;
}
?>