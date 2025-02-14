<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
<script>
    async function loadJson() {
        let response = await fetch("data.json");
        let data = await response.json();

        console.log(data);
    }
    loadJson();

</script>

</body>
</html>