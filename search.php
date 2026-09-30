<?php
$conn = mysqli_connect("localhost","root","","flowers");

$search = $_POST['search'];

$sql = "SELECT * FROM flowerss WHERE name LIKE '%$search%'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "<p>" . $row['name'] . "</p>";
}

$conn->close();
?>