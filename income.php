<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/im.css">
    <link rel="stylesheet" href="style/navbar.css">
    <title>รายรับ</title>
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
        <h2>รายงานรายรับ</h2>
        <br/>
        <center>
            <select>
                <option value="Day">Day</option>
                <option value="Week">Week</option>
                <option value="Month">Month</option>
                <option value="Year">Year</option>
                <option value="Period">Period</option>
            </select>
            <br/>
        <table>
            <thead>
                <tr >
                    <td width="10%">วันที่</td>
                    <td width="30%">รายการ</td>
                    <td width="30%">จำนวน</td>
                </tr>
            </thead>
            
            <tbody>
                <tr >
                    <td>18/9/2565</td>
                    <td >เงินเข้า</td>
                    <td >300.00</td>
                </tr>
                <tr >
                    <td></td>
                    <td >เงินเข้า</td>
                    <td >300.00</td>
                </tr>
            </tbody>
        </table>
                </center>
    </div>
    </div>
</body>
</html>