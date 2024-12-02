<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veri al sender</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="topMenu">
        <a href="anasayfadeneme.html"> Home</a>
        <a href="logindeneme.html"> Login</a>
        <a href="registerdeneme.html"> Register</a>
        <a href="http://localhost:8080/webprojesi/veriAlmaTaker.php"> Customer</a>
        <a href="http://localhost:8080/webprojesi/veriAlmaSender.php"> Company</a>
        <a href="http://localhost:8080/webprojesi/veriAlmaPackage.php"> Package Info</a>
        <a href="opps.html"> Request Box</a>
    </div>

    <table>
        <tr>
            <th>sender Name</th>
            <th>sender Adress</th>
            <th>sender Telephone</th>
            <th>sender Branch</th>
            <th>sender Branch Adress</th>
            <th>tracking Number</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "webprojesi");
        if($conn-> connect_error) {
            die("connection failed:". $conn-> connect_error);
        }

        $sql = "SELECT comName, comAdress, comTel, comBranch, comBranchAdress, trackingNum from sender";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["comName"].  "</td><td>". $row["comAdress"].  "</td><td>". $row["comTel"]
                .  "</td><td>". $row["comBranch"].  "</td><td>". $row["comBranchAdress"].  "</td><td>". $row["trackingNum"].  "</td><tr>" ;
            }
            echo "</table>";
        }   
        else{
            echo "0 result";
        }

        $conn->close();


        ?>
    </table>
</body>
</html>