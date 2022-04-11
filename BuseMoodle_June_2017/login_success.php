<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To The Sitet</title>
</head>

<body>

    <big>
        <b>ONLINE USERS</b>
    </big>
    <center>
        <small>(last 5 minutes) </small>
    </center>

    <?php

    $conn = mysqli_connect("localhost", "munashe", "bryanmunashe", "moodle");

    if ($conn) {

        $sql = "SELECT * FROM moodle";

        $contents = mysqli_query($conn, $sql);

        if (mysqli_num_rows($contents) > 0) {

            while ($row = mysqli_fetch_assoc($contents)) {
                echo ($row["firstname"] . " " . $row["lastname"]);
                echo "</br>";
            }
        } else {
            echo "no result";
        }
    } else {
        die("Connection failed" . mysqli_connect_error());
    }



    mysqli_close($conn);


    ?>
</body>

</html>