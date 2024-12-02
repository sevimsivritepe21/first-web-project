<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veri al taker</title>

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
            <th>taker Name</th>
            <th>taker Adress</th>
            <th>taker Telephone</th>
            <th>taker Branch</th>
            <th>taker Branch Adress</th>
            <th>tracking Number</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "webprojesi");
        if($conn-> connect_error) {
            die("connection failed:". $conn-> connect_error);
        }

        $sql = "SELECT takName, takAdress, takTel, takBranch, takBranchAdress, trackingNum from taker";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["takName"].  "</td><td>". $row["takAdress"].  "</td><td>". $row["takTel"]
                .  "</td><td>". $row["takBranch"].  "</td><td>". $row["takBranchAdress"].  "</td><td>". $row["trackingNum"].  "</td><tr>" ;
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