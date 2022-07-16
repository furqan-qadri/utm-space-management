<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer View 2</title>
</head>
<body>
<h3>Welome Dr Halinawati Hirol</h3>
    <h4>Here is a list of all your booking history</h4>

    <table>
        <tr>
        <th>Lecturer Name</th>
            <th>Date</th>
            <th>Choice</th>
            <th>Timeslot</th>
            <th>Course</th>
            <th>Additional requests</th>
        </tr>

        <?php
        $conn =mysqli_connect("localhost","root","","testfirst");

        $sql= "SELECT * FROM registration WHERE firstName='halina' ";

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