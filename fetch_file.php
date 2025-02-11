<?php
include("conn.php");


$q1= "select distinct section from supply ";  
$stmt = sqlsrv_query($conn, $q1);

$filesArray = [];

if ($stmt) {
    while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
        $filesArray[] = $row;
    }
}

header("Content-Type: application/json");

echo json_encode(["success" => true, "sections" => $filesArray],JSON_UNESCAPED_UNICODE);
sqlsrv_close($conn);

?>