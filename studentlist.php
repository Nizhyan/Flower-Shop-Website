<?php 

$conn = mysqli_connect("localhost","root","","school");

if (!$conn)
    echo(mysqli_connect_error());

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
      rel="stylesheet">
</head>
<body style="padding: 10px;">
    <table class="table table-striped" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Age</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Address</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>

        <?php

            $sql = "SELECT * FROM students";

            $result = $conn -> query($sql);
            // yaani $conn hara functiona query bu variable $sql

            if($result -> num_rows > 0)
                {
                while($row = $result -> fetch_assoc()){
                    echo(
                        "<tr>"
                            ."<td>".$row['id']."</td>"
                            ."<td>".$row['f_name']." ".$row['l_name']."</td>"
                            ."<td>".$row['age']."</td>"
                            ."<td>".$row['birthday']."</td>"
                            ."<td>".$row['address']."</td>"
                            ."<td>".$row['grade']."</td>"
                        ."</tr>"
                    );
                }
            }
        else
            echo("<b style='text-align:center;'> 0 Rows Selected </b>");

        $conn -> close();
        ?>
        </tbody>
    </table>
</body>
</html>