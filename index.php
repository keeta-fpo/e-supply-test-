<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <script>
        
        function logDownload(file, section) {
            fetch("/log-download.php",
             {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                        },body: JSON.stringify({ filename: file, section: section })
                        }
        
        ).then(response => response.json())
              .then(data => console.log("Download logged:", data))
              .catch(error => console.error("Error logging download:", error));
        }



        function showSection(event) {
            event.preventDefault();
            var selectedValue = document.getElementById("section-select").value
            document.querySelectorAll(".details").forEach(div => div.classList.add("hidden"))
            document.getElementById("details" + selectedValue).classList.remove("hidden")
        }
    </script>
</head>
<body>

<div class="max-w-2xl mx-auto">
        <div class="bg-white shadow-md rounded-lg p-4 mb-6">
            <h2 class="text-xl font-semibold mb-2">ระบบคลังพัสดุครุภัณฑ์ สำนักงานเศรษฐกิจการคลัง </h2>
            
            <div class="flex justify-between items-center">
                <p>ปีงบประมาณ : <span class="font-bold">2567</span></p>
                <div class="flex space-x-2">
                    <img src="excel-icon.png" alt="Excel" class="w-6 h-6">
                    <img src="excel-icon.png" alt="Excel" class="w-6 h-6">
                </div>
            </div>
            <form id="section" class="mt-2" onsubmit="showSection(event)">
                <label for="section-select" class="block">เลือกกอง:</label>
                <select id="section-select" class="border rounded p-2 w-full mt-1">
                    <option value="1">กอง กองนโยบายพัฒนาระบบการเงินภาคประชาชน
                    </option>
                    <option value="2">กอง สำนักงานเลขานุการกรม</option>
                    <option value="3">กอง 3</option>
                    <option value="4">กอง 4</option>
                </select>
                <button type="submit" class="mt-2 bg-blue-500 text-white p-2 rounded">ยืนยัน</button>
            </form>
        </div>
</div>

<div id="details1" class="details hidden bg-white shadow-md rounded-lg p-4 mb-4">
            <h3 class="text-lg font-medium">บัญชีรายงานครุภัณฑ์</h3>
            <p>ปีงบประมาณ : <span class="font-bold">2567</span></p>
            <p>ส่วน : สารสนเทศระบบการเงินและการออมภาคประชาชน</p>
            <!-- <p>กอง : กองนโยบายพัฒนาระบบการเงินภาคประชาชน (ก.พ.ช)</p> -->
            <a href="download1.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download1.xlsx', 'สารสนเทศระบบการเงินและการออมภาคประชาชน')">Download</a>
            
            <div class="d-flex gap-1 justify-content-center py-1">
            <button class="btn btn-primary d-inline-flex align-items-center" type="button" onclock="dowloadXlsx()">Download XLSX</button>
            </div> 

<!-- 
            <p>ส่วน : สารสนเทศระบบการเงินและการออมภาคประชาชน</p>
            <p>กอง : กองนโยบายพัฒนาระบบการเงินภาคประชาชน (ก.พ.ช)</p>
            <a href="download1.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download1.xlsx', 'สารสนเทศระบบการเงินและการออมภาคประชาชน')">Download</a>
            <p>ส่วน : สารสนเทศระบบการเงินและการออมภาคประชาชน</p> -->
            <!-- <p>กอง : กองนโยบายพัฒนาระบบการเงินภาคประชาชน (ก.พ.ช)</p>
            <a href="download1.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download1.xlsx', 'สารสนเทศระบบการเงินและการออมภาคประชาชน')">Download</a>
            <p>ส่วน : สารสนเทศระบบการเงินและการออมภาคประชาชน</p>
            <a href="download1.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download1.xlsx', 'สารสนเทศระบบการเงินและการออมภาคประชาชน')">Download</a>
             -->
            <!-- <div class="d-flex gap-1 justify-content-center py-1">
            ปุ่มสำหรับดาวน์โหลด

          <button class="btn btn-primary d-inline-flex align-items-center" type="button" 
            onclick="logDownload('download1.xlsx', 'สารสนเทศระบบการเงินและการออมภาคประชาชน')">
             Download XLSX
         </button>
        </div> -->


            <!-- <p>กอง : กองนโยบายพัฒนาระบบการเงินภาคประชาชน (ก.พ.ช)</p> -->
        </div>
<!-- 
        <div id="details2" class="details hidden bg-white shadow-md rounded-lg p-4 mb-4">
            <h3 class="text-lg font-medium">บัญชีรายงานครุภัณฑ์</h3>
            <p>ปีงบประมาณ : <span class="font-bold">2567</span></p>
            <p>ส่วน : ส่วนบริหารทรัพยากรบุคคล
            </p>
            <a href="download2.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download2.xlsx', 'ส่วนกลยุทธ์และพัฒนาระบบการเงินภาคประชาชน')">Download</a>

            <p>ส่วน : ส่วนบริหารทรัพยากรบุคคล
            </p>
            <a href="download2.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download2.xlsx', 'ส่วนกลยุทธ์และพัฒนาระบบการเงินภาคประชาชน')">Download</a>

            <p>ส่วน : ส่วนบริหารทรัพยากรบุคคล
            </p>
            <a href="download2.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download2.xlsx', 'ส่วนกลยุทธ์และพัฒนาระบบการเงินภาคประชาชน')">Download</a>
            <button type="button">ถัดไป</button>

        </div> -->

        <!-- <div id="details3" class="details hidden bg-white shadow-md rounded-lg p-4 mb-4">
            <h3 class="text-lg font-medium">บัญชีรายงานครุภัณฑ์</h3>
            <p>ปีงบประมาณ : <span class="font-bold">2567</span></p>
            <p>ส่วน : กองบัญชี</p>
            <p>กอง : งานเงิน</p>
            <a href="download3.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download3.xlsx', 'กองบัญชี')">Download</a>
        </div> -->

        <!-- <div id="details4" class="details hidden bg-white shadow-md rounded-lg p-4">
            <h3 class="text-lg font-medium">บัญชีรายงานครุภัณฑ์</h3>
            <p>ปีงบประมาณ : <span class="font-bold">2567</span></p>
            <p>ส่วน : การคลัง</p>
            <p>กอง : งานบัญชี</p>
            <a href="download4.xlsx" class="text-blue-500 hover:underline" download onclick="logDownload('download4.xlsx', 'การคลัง')">Download</a>
        </div> -->
    </div>
    
</body>
</html>