<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        async function loadfiles() {
            try{
                let response = await fetch("fetch_file.php");

                // console.log(response.json());

                let data = await response.json();
            

                if(data.success)
                {
                        // console.log("sss");

                    let dropdown = document.getElementById("drop");
                   
                        data.sections.forEach(sections =>{
                        let option = document.createElement("option");

                            // console.log(file.section);

                            option.value = sections.section;
                            option.textContent = sections.section;
                            dropdown.appendChild(option);                        
                    });


                }else {
                    console.error('fail');
                }
                }catch(error){
                console.error(error);
            }            
        }
    </script>

</head>

<body>
    <h2>Select Download</h2>

    
    <select id ="drop">
        <option value="">select file </option>
    </select>
    
    <script>
               document.addEventListener("DOMContentLoaded", loadfiles);

    </script>
    
</body>
</html>