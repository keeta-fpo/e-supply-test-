<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script> src= https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js</script>
    <script>
          async function loadsection() {
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
     
    async function loadR(format) {
            let filterValue = document.getElementById("drop").value;
            let url =`fetch_report.php?filter=${encodeURIComponent(filterValue)}`;

            // echo url;

            try{
                let response = await fetch(url);
                let data = await response.json();

                console.log(data.success); 
                
                if (data.success){
                    userData = data.user;
                    let tableBody = document.querySelector("#reportTable tbody");
                    tableBody.innerHTML = "";

                    userData.forEach(user => {
                        let row = `<tr>
                        <td>${user.brand}</td>
                        <td>${user.model}</td>
                        </tr>`;
                        tableBody.innerHTML += row;
                    });
                }else {
                    console.log("fail");
                }
            }catch (error){
                console.error("error fetch",error);
            }
        }
        </script>
</head>
<body>
        <h1>select</h1>

    <select id ="drop">
        <option value="">select file </option>
    </select>

     <button onclick = "loadR()">load Data</button>
     <button onclick = "DownR('csv')">csv</button>
     <button onclick = "DownR('json')">json</button>
     <button onclick = "DownR('excel')">excel</button>  
 
     <table id="reportTable">
         <thead>
             <tr>
                 <th>ID</th>
                 <th>model</th>
             </tr>
         </thead>
     <tbody>

     </tbody>
 </table>  

</body>
    <script>
               document.addEventListener("DOMContentLoaded", loadsection);
              
    </script>
</html>