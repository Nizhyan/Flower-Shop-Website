<?php

    session_start();


?>

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
        crossorigin="anonymous"
    />
</head>
<body style="padding: 10px;">
    <h3 style="text-align: center;">Place Your Order</h3>
    <form action="page2.php" method="post">
        <div class="modal-body" style="padding: 20px;">
            <div class="mb-3">
                <label class="form-label">Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required/>
            </div>
            <label class="form-label"> Pick a Flower</label>
            <select class="mb-3" name="flower" placeholder="Pick a Flower" required style="width:1470px; height: 35px; border: 1px solid rgb(195, 193, 193); border-radius: 1%;">
                <option>Lotus</option>
                <option>Peony</option>
                <option>Tulip</option>
                <option>Lily</option>
                <option>Cherry Blossom</option>
            </select>
            </div>
            <div class="mb-3" style="margin-left:20px;">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" min="1" class="form-control" placeholder="Enter Quantity" required/>
            </div>
            <div class="mb-3" style="margin-left:20px;">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Your Address" required/>
            </div>
            <div class="mb-3" style="margin-left:20px;">
                <label class="form-label">Special Requests</label>
                <textarea rows="5" cols="50" maxlength="200" name="request" class="form-control" placeholder="Enter more details on your order" style="width:1000px;padding-bottom: 100px; border: 1px solid rgb(195, 193, 193);"></textarea>
            </div>
        </div>
        <div class="modal-footer" style="text-align: center; display: block;" style="margin-left:20px;">
        <button type="submit" class="btn btn-primary">Place Order</button>
        <a class="btn btn-secondary" href="page3.php" style="background-color: purple;">See Shopping Cart</a>
        <a class="btn btn-secondary" href="index.php">Cancel</a>
        </div>
    </form>
</body>
</html>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = mysqli_connect('localhost','root','','flowers');
    // $_SERVER — built-in PHP array that stores details about the current request and server 
    // (like whether it's GET or POST, the URL, script filename).
        if (!$conn){
            echo (mysqli_connect_error());
        }

    // $_POST — built-in PHP array holding the values a user typed/submitted in a form (via POST method). (paiva POST thabta na ma jegrta)
        $name = $_POST['name'];
        $flower = $_POST['flower'];
        $quantity = $_POST['quantity'];
        $address = $_POST['address'];
        $request = $_POST['request'];

        $sql = "INSERT INTO Shopping_Cart (name,flower,quantity,address,request)
        VALUES ('$name','$flower','$quantity','$address','$request')";

        if(mysqli_query($conn,$sql)){
        $_SESSION['message'] = "Order Added to Cart" ;
        header('location:page3.php'); 
        }
        
        else
        echo "Error: " . mysqli_error($conn);
        $conn -> close();
    }
    ?>

