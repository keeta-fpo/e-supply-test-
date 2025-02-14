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


        // function downf(){
        //     let fileName = document.getElementById("drop").value;
        //     if(!fileName){
        //         alert("select")
        //         return;
        //     }
        
        // let link =document.createElement("a");
        // link.href = "download_file.php?file= " + encodeURIComponent(fileName);
        // link.download = fileName;
        // document.body.appendChild(link);
        // link.click();
        // document.body.removeChild(link);
        // }
    </script>

</head>

<body>
    <h2>Select Download</h2>


    
    <select id ="drop">
        <option value="">select file </option>
    </select>



    <!-- <button onclick="downf()"> Download </button> -->

    <script>
               document.addEventListener("DOMContentLoaded", loadfiles);

    </script>
    
</body>
</html>