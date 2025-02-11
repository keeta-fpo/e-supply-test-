<?php


header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['file_id'] && isset($data['flie_name']))
{
    echo json_encode(["success" => true, "message" => "Download logged successfully"]);
}else{
    echo json_encode(['sucess' => false, "message" => "Invalid data"]);
}
)
?>