<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <?php
include('conn.php');
?>
</head>

<body>

    <?php

// print_r(get_loaded_extensions());

// $q = "select * from supply where activeState = '1' ORDER BY 'registID'";
// $result = sqlsrv_query($conn,$q);


$q = "select * from supply where activeState = '1' ORDER BY 'registID'";


    $q1= "select section from supply ";
    $stmt = sqlsrv_query($conn, $q1);
    
    $Arr1 = [];

    if($stmt){
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
            $Arr1[] = $row;
        }
    }
    header("Content-Type: application/json");

    echo $Arr1;
    
    echo json_encode(["success" => true, "file"=> $Arr1],JSON_UNESCAPED_UNICODE);
    echo json_decode(json_encode(["success" => true, "file"=> $Arr1],JSON_UNESCAPED_UNICODE));

    sqlsrv_close($conn);
    ?>

    <script>
        
    </script>


</body>
</html>