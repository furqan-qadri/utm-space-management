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
            <th>User ID</th>
        </tr>

        <?php
        $conn =mysqli_connect("localhost","root","","testfirst");

        $sql= "SELECT * FROM registration";

        $result= $conn->query($sql);

        if ($result -> num_rows >0){
            while ($row = $result -> fetch_assoc()){
                echo "<tr><td>". $row["firstName"]. "</td><td>"
                .$row["lastName"]. 
                "</td> <td>". $row["gender"]. 
                "</td> <td>". $row["email"]. 
                "</td> <td>". $row["password"].
                
                "</td></tr>";
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