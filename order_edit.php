<?php

$conn = mysqli_connect("localhost","root","","flowers");

if (!$conn)
    echo(mysqli_connect_error());

    session_start();

if (isset($_GET['edit'])){
    $id=$_GET['edit'];    

    $sql = "SELECT * FROM Shopping_Cart WHERE id = $id";

    $result = $conn -> query($sql);

    $row = mysqli_fetch_array($result);

    $name = $row['name'];
    $flower = $row['flower'];
    $quantity = $row['quantity'];
    $address = $row['address'];
    $request = $row['request'];

    $conn -> close();
}

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
    <h3 style="text-align: center;">Edit Your Order</h3>
    <form action="order_edit.php" method="post">
        <div class="modal-body" style="padding: 20px;">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?php echo($id);?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Name </label>
                <input type="text" name="name" value="<?php echo($name);?>" class="form-control" required/>
            </div>
            <label class="form-label"> Pick a Flower</label>
            <select class="mb-3" name="flower" value="<?php echo($flower);?>" placeholder="Pick a Flower" required style="width:1470px; height: 35px; border: 1px solid rgb(195, 193, 193); border-radius: 1%;">
                <option>Lotus</option>
                <option>Peony</option>
                <option>Tulip</option>
                <option>Lily</option>
                <option>Cherry Blossom</option>
            </select>
            </div>
            <div class="mb-3" style="margin-left:20px;">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" value="<?php echo($quantity);?>" min="1" class="form-control" placeholder="Enter Quantity" required/>
            </div>
            <div class="mb-3" style="margin-left:20px;">
                <label class="form-label">Address</label>
                <input type="text" name="address" value="<?php echo($address);?>" class="form-control" placeholder="Enter Your Address" required/>
            </div>
            <div class="mb-3" style="margin-left:20px;">
                <label class="form-label">Special Requests</label>
                <textarea rows="5" cols="50" maxlength="200" name="request" value="<?php echo($request);?>" class="form-control" placeholder="Enter more details on your order" style="width:1000px;padding-bottom: 100px; border: 1px solid rgb(195, 193, 193);"></textarea>
            </div>
        </div>
        <div class="modal-footer" style="text-align: center; display: block;" style="margin-left:20px;">
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-secondary" href="index.php">Cancel</a>
        </div>
    </form>
</body>
</html>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = mysqli_connect('localhost','root','','flowers');
        if (!$conn){
            echo (mysqli_connect_error());
        }

        $id= $_POST['id'];
        $name = $_POST['name'];
        $flower = $_POST['flower'];
        $quantity = $_POST['quantity'];
        $address = $_POST['address'];
        $request = $_POST['request'];
        $sql = "UPDATE Shopping_Cart SET name='$name' ,
        flower='$flower' ,
        quantity='$quantity' ,
        address='$address' ,
        request='$request' 
        WHERE id = $id " ;

        if(mysqli_query($conn,$sql)){
            $_SESSION['message'] = "Order No. ".$id." Updated" ;
            header('location:page3.php');
        }
        else
            echo ( $conn -> error());

        $conn -> close();
    }
?>