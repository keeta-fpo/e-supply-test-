<?php
$folderParth = "files/";

if(isset($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = $folderPath . $fileName;

    if (file_exists($filePath)){
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        readfile($filePath);
        exit;
    }else {
        http_response_code(404);
        echo "File Not Found!";
    }
}
?>