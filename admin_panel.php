<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
session_start();
// hako mn session start nakri av page xr navadbu

if (!isset ($_SESSION['is_admin'])){
    header('location: admin_login.php');
    exit;
}

$conn = mysqli_connect('localhost','root','','flowers');
$result = mysqli_query ($conn,'SELECT * FROM flowerss');
?>

<div class="container mt-5">
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td>
                        <form method="post" action="update_price.php" class="d-flex justify-content-center gap-2">
                            <!-- Start a form. When submitted, it sends data via POST to update_price.php. -->
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <!-- A hidden field carrying this flower's id — invisible to the user, but needed so the backend knows which row to update. -->
                            <input type="number" name="price" value="<?php echo $row['price']; ?>" class="form-control" style="width:100px;">
                            <!-- An editable number field, pre-filled with the current price. Admin can change this number. -->
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>