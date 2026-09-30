<?php
session_start();

if(!isset($_SESSION['is_admin'])){
    die("Not authorized");
    exit;
}

$conn=mysqli_connect('localhost','root','','flowers');

$id=$_POST['id'];
$price=$_POST['price'];

mysqli_query($conn,"UPDATE flowerss SET price=$price WHERE id=$id");
header('location:index.php#order');


?>