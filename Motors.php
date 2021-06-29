<!DOCTYPE html>
<html lang="en">

<head>

    <title>Run</title>
</head>

<body>
    <?php

    $conn = new mysqli('localhost', 'root', '', 'Motors');
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 1);


    $stmt = $conn->prepare("SELECT  * FROM Engines ORDER BY id DESC LIMIT 1 ;");
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo "Motor1 = " . $row["Motor1"] . " Motors2 = " . $row["Motor2"] . " Motor3 = " . $row["Motor3"] . " Motor4 = " . $row["Motor4"]
            . " Motor5 = " . $row["Motor5"] . " Motor6 = " . $row["Motor6"];
    }


    ?>

</body>

</html>