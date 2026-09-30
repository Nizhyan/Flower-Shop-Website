<?php 

$conn = mysqli_connect("localhost","root","","flowers");

if (!$conn)
    echo(mysqli_connect_error());
    session_start();
?>

<!-- Think of it like: session_start() = "open the storage box for this user." $_SESSION[...] = "put/get stuff from that box." -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .alert {padding:20px; color:green;}

    .closebtn {
    margin-left: 15px;
    color: green;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {color: white;}
</style>


</head>
<body style="padding: 10px;">

    <?php
    
    if (isset($_SESSION['message'])){?>
    <div class='alert' style="background-color:lightgreen;">
        <strong><?php echo ($_SESSION['message'])?></strong>
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
    <?php }?>
    
    

    <table class="table table-striped" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Order_Date</th>
                <th scope="col">Full Name</th>
                <th scope="col">Flower</th>
                <th scope="col">Quantity</th>
                <th scope="col">Address</th>
                <th scope="col">Request</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

$sql = "SELECT * FROM Shopping_Cart";

$result = $conn -> query($sql);
// yaani $conn hara functiona query bu variable $sql

if($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc()){
        if($row['name']){
            echo(
                "<tr>"
                ."<td>".$row['id']."</td>"
                ."<td>".$row['order_date']."</td>"
                ."<td>".$row['name']."</td>"
                ."<td>".$row['flower']."</td>"
                ."<td>".$row['quantity']."</td>"
                ."<td>".$row['address']."</td>"
                ."<td>".$row['request']."</td>"
                ."<td>
                <a class='btn btn-secondary' href='order_edit.php?edit=".$row['id']."'><i class='fa fa-edit'></i></a>
                <a class='btn btn-danger' href='order_del.php?del=".$row['id']."'><i class='fa fa-trash-o'></i></a>
                </td>"
                // so its bc i want bot a tags beside one another in the same cell i let both a tags in same dqoutations
                ."</tr>"
                
                );
                }
                }
                } else {
                    echo("<b style='text-align:center;'> Your Cart is Empty </b>");
                    }
    
    echo "<a href='page2.php' target='_self' style='font-size:x-large; background-color:lavender; border:1px solid purple;
    border-radius:12%; color:lavender; margin-bottom:auto;'>&#10133;</a>";
    session_destroy();
// yan ji session_abort() ava da alerta ma jebchit hako am page refresh dkain
    $conn -> close();
?>
</tbody>
</table>
</body>
</html>