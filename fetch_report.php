<?php
include("conn.php");
header("Content-Type: application/json");

$filter = isset($_GET['filter']) ? $_GET['filter'] :'';

$q = "select brand, model from supply" ;

if($filter){
    $q .= "where = ?";
}

$params = $filter ? [$filter] : [];
$stmt = sqlsrv_query($conn, $q, $params);

$users = [];
if ($stmt) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
        $users [] = [
            "brand" => $row['brand'],
            "model" =>$row['model'] 
        ];
    }
}

echo json_encode(["success" => true, "user" => $users]);
sqlsrv_close($conn);

?>