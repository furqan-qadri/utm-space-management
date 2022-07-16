<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>

        <?php
        $conn =mysqli_connect("localhost","root","","testfirst");

        $sql= "SELECT * FROM registration WHERE gender='f' ";

        $result= $conn->query($sql);

        if ($result -> num_rows >0){
            while ($row = $result -> fetch_assoc()){
                
                <tr>
        <td> <?php echo $row["firstName"] ?></td>
        <td> <?php echo $row["firstName"] ?></td>
        <td> <?php echo $row["firstName"] ?></td>
        // <td> <?php echo $row["firstName"] ?></td>
        <td> <?php echo $row["firstName"] ?></td>
        
        </tr>
            }
        }
            else {
                echo "No results";
            }
        $conn->close();
        ?>
      
    </table>
</body>
</html>