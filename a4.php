<?php

header("Content-Type: application/json");

include ("conn.php");

$q = "select * from supply";
$stmt = sqlsrv_query($conn, $q);

$filesArr = [];

    while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
        $filesArr[] = $row['section'];
            
            // "file_name" => $row['filema,e'] 
    }
    echo json_encode(["success" => true, "file" => $filesArr]);
    sqlsrv_close($conn);
?>