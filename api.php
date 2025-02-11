<?php
require 'conn.php'; // เชื่อมต่อฐานข้อมูล

$q1 = "SELECT id, section FROM supply";
$stmt = sqlsrv_query($conn, $q1);

$Arr1 = [];

if ($stmt) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $Arr1[] = [
            "id" => $row['id'],  // ใช้ ID เป็นค่า value
            "section" => $row['section'] // ชื่อแผนก
        ];
    }
}

header("Content-Type: application/json");
echo json_encode(["success" => true, "sections" => $Arr1], JSON_UNESCAPED_UNICODE);

sqlsrv_close($conn);
?>
