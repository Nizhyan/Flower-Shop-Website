<?php

$conn = mysqli_connect("localhost","root","","flowers");

if (!$conn)
    echo(mysqli_connect_error());

    session_start();


// isset() — checks if a variable exists and is not null. Returns true/false.
// $_GET — built-in PHP array that stores values passed through the URL (e.g. page.php?id=5 → $_GET['id'] = 5).
if (isset($_GET['del'])){
$id=$_GET['del'];    

$sql = "SELECT * FROM Shopping_Cart WHERE id = $id";

    $result = $conn -> query($sql);

    $row = mysqli_fetch_array($result);

    $name = $row['name'];
    $flower = $row['flower'];
    $quantity = $row['quantity'];
    $address = $row['address'];
    $request = $row['request'];


$sql = "DELETE FROM Shopping_Cart WHERE id=$id";

if(mysqli_query($conn,$sql)){
    header("location:page3.php");
    $_SESSION['message'] = "Order No. ".$id." Removed From Cart" ;

}

else{
    echo ($conn -> error());
}

$conn -> close();
}

?>