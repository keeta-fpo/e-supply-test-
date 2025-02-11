<?php
require 'conn.php'; // เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $selectedID = $_POST['section_id'] ?? '';

    if (!empty($selectedID)) {
        // ทำการบันทึกลงฐานข้อมูล
        $query = "INSERT INTO selected_sections (section_id) VALUES (?)";
        $stmt = sqlsrv_query($conn, $query, [$selectedID]);

        if ($stmt) {
            echo json_encode(["success" => true, "message" => "บันทึกข้อมูลสำเร็จ"]);
        } else {
            echo json_encode(["success" => false, "message" => "บันทึกไม่สำเร็จ"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "ไม่มีข้อมูล"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "วิธีการส่งข้อมูลไม่ถูกต้อง"]);
}
?>
