<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function log_download(fileID, fileNane ){

            fectch('log_download.php',{
            method: 'POST',
            header: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({file_id: fileId, flie_name: fileName})
        }).then(response => response.json())
        .then(data=>{
            if (data.success){
                console.log("" +data.message);
                alert("sdfa" + data.message);
            }else{
                console.error( "xxxc");
            }
        })
    }
    </script>

</head>

<body>
    <a a href="down.xlsx" download onclick="logDownload(1, 'sample.pdf')">Download File</a>

    <a href="download1.xlsx"  download onclick="logDownload('download1.xlsx', 'สารสนเทศระบบการเงินและการออมภาคประชาชน')">Download</a>

</body>

</html>