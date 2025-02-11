<?php
    $servername = 'localhost';
    $database = 'fpo_supply';
    $username = 'sa';
    $pass = 'p@ss';

    $connectionOptions = array(
        "Database" => $database, 
        "UID" => $username,
        "PWD" => $pass,
        "MultipleActiveResultSets"=>true,
        "TrustServerCertificate" =>true,
        "CharacterSet" => "UTF-8"

    );
        #estiblish server
        $conn = sqlsrv_connect($servername, $connectionOptions);

        if($conn === false){
            die(print_r(sqlsrv_errors(),true));

            echo "fail";
        }else{
            // echo "good";
        }
?>