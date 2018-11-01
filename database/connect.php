<?php 
    $user = "root";
    $pass = "root";
    $host = "localhost";
    $db = "db_auto_app";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        echo "Something broke";
        exit;
    }
    //  echo "connected!";
    // Write a db query
    $myQuery = "SELECT * FROM tbl_test";
    $result = mysqli_query($conn, $myQuery);
    $rows = array();

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };

    echo json_encode($rows);

?>