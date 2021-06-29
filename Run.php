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


    $stmt = $conn->prepare("SELECT  * FROM Run ORDER BY  id DESC LIMIT 1 ;");
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo "ON= " . $row["ON_OFF"];
    }


    ?>

</body>

</html>