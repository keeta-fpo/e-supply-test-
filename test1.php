<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown จากฐานข้อมูล</title>

    <?php
    require 'conn.php'; // เรียกไฟล์เชื่อมต่อฐานข้อมูล

    $q1 = "SELECT id, section FROM supply WHERE activeState = '1' ORDER BY registID";
    $stmt = sqlsrv_query($conn, $q1);

    $sections = [];

    if ($stmt) {
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $sections[] = $row;
        }
    }
    sqlsrv_close($conn); // ปิดการเชื่อมต่อฐานข้อมูล
    ?>

</head>
<body>

    <label for="sectionSelect">เลือกแผนก:</label>
    <select id="sectionSelect">
        <option value="">-- กรุณาเลือก --</option>
        <?php foreach ($sections as $section) : ?>
            <option value="<?= htmlspecialchars($section['id']) ?>">
                <?= htmlspecialchars($section['section']) ?>
            </option>
        <?php endforeach; ?>
    </select>

</body>
</html>
