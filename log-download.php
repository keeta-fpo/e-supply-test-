<?php
include("conn.php");

$data = json_decode(file_get_contents("php/://input"), true);

if (isset($data["file_"]) && isset($data["file_name"])) {
    echo json_encode(["success" => true, "message" => "good"]);

}else{
    echo json_encode(["success" => false, "message" => "NOt"]);
}


    // $downloadTime =dat

?>