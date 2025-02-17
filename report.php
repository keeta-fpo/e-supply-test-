<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
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


                console.log("load",data.success); 
                // console.log("ee");


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

        async function DownL(format) {
            // alert ("sss", format);
            console.log("downloadtype", format);

            let filterValue = document.getElementById('drop').value;                                              
            let url =`fetch_report.php?filter=${encodeURIComponent(filterValue)}`;

            console.log("send URL",url);

            // try{
                let response = await fetch(url);
                let data = await response.json();

                // console.log(data);


                 if(data.success){
                    let users = data.user;

                    console.log(format);

                          if (format === 'excel'){
                        
                        // console.log("excel");
                    
                        let  wb = XLSX.utils.book_new();
                        let  ws = XLSX.utils.json_to_sheet(users);
                        XLSX.utils.book_append_sheet(wb,ws,"report");
                        XLSX.writeFile(wb,"reprot.xlsx");

                            } else{
                        console.log("csv");
                        } 

                 }
                }
    
            // }
        
        
        </script>


</head>
<body>

        <h1>select</h1>
    <select id ="drop">
        <option value="">พัสดุทั้งหมด</option>
    </select>

     <button onclick = "loadR()">load Data</button>
     <button onclick = "DownL('csv')">csv</button>
     <!-- <button onclick = "DownLJ('json')">json</button> -->
     <button onclick = "DownL('excel')">excel</button>  
 
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