<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/im.css">
    <title>income and expenses</title>
    <link rel="stylesheet" href="style/navbar.css">
</head>
<body>
    <div class="topnav">
    <a class="active" href="index.php">หน้าหลัก</a>
        <a href="Home.php">บันทึกรายรับ-รายจ่าย</a>
        <a href="income.php">รายรับ</a>
        <a href="expenses.php">รายจ่าย</a>
      </div>
    <div class = "bg-im">
    <div class="container">
        <br/>
        <center>
        <h2 >บันทึกรายรับ-รายจ่าย</h2>
         <button class="open-button" onclick="openForm()">เพิ่มรายรับ-รายจ่าย</button>
            <br/><br/><br/>
            <div class="form-popup" id="myForm">
            <form action="/Home.php" class="form-container">
                <h1>รายการ</h1>
    
                <label for="วัน"><b>วันที่</b>
                 <select>
                    <option value="Day">Day</option>
                </select>
                    <select>
                       <option value="Month">Month</option>
                   </select>
                   <select>
                    <option value="Year">Year</option>
                </select>
                </label>
                <label for="รายการ"><b>รายการ</b>
                    <input type="text" placeholder="กรอกข้อมูล">
                </label>
                
                <label for="รายการ"><b>รายรับ</b>
                    <input type="text" placeholder="กรอกข้อมูล">
                </label>
                <label for="รายการ"><b>รายรับ</b>
                    <input type="text" placeholder="กรอกข้อมูล">
                </label>

                <button type="submit" class="btn">ตกลง</button>
                <button type="button" class="btn cancel" onclick="closeForm()">ยกเลิก</button>
            </form>
            </div>

            <script>
            function openForm() {
            document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
            document.getElementById("myForm").style.display = "none";
            }
            </script>
        <!-- <a href="" class="button">เพิ่มรายรับ-รายจ่าย</a> -->
        <br/>
        <center>
            <br/> 
        <table>
            <thead>
                <tr >
                    <td width="10%">วันที่</td>
                    <td width="30%">รายการ</td>
                    <td width="35%">รายรับ</td>
                    <td width="20%">รายจ่าย </td>
                    <td width="50%">คงเหลือ</td>
                </tr>
            </thead>
            <tbody>
                <tr >
                    <td>18/9/2565</td>
                    <td>เงินเข้า</td>
                    <td>300.00</td>
                    <td> </td>
                    <td>300.00</td>
                </tr>
                <tr >
                    <td> </td>
                    <td>ซื้อของใช้</td>
                    <td> </td>
                    <td>50.00</td>
                    <td>250.00</td>
                </tr >
                <tr >
                    <td></td>
                    <td>เงินเข้า</td>
                    <td>300.00</td>
                    <td> </td>
                    <td>550.00</td>
                </tr>
                <tr >
                    <td></td>
                    <td>ซื้อของใช้</td>
                    <td> </td>
                    <td>50.00</td>
                    <td>500.00</td>
                </tr>
                   
            </tbody>
        </table>
                </center>
    </div>
    </div>
</body>
</html>