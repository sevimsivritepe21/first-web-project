<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veri al packageinfo</title>

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
            <th>package Register Date</th>
            <th>package Deliver Date</th>
            <th>package State</th>
            <th>package Location</th>
            <th>tracking Number</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "webprojesi");
        if($conn-> connect_error) {
            die("connection failed:". $conn-> connect_error);
        }

        $sql = "SELECT pacRegDate, pacDeliverDate, pacState, pacLocation, trackingNum from packageinfo";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["pacRegDate"].  "</td><td>". $row["pacDeliverDate"].  "</td><td>". $row["pacState"]
                .  "</td><td>". $row["pacLocation"].  "</td><td>". $row["trackingNum"].  "</td><tr>" ;
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