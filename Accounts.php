<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="author" content="Kezilahabi-JB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
     GROUP 35 PROJECT
    </title>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
    <link rel="icon" href="C.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
 table {
 width: 50%;
 border-collapse: collapse;
 border-radius: px;;
 margin:0 auto;
 font-size:15px;
 background-color: gold;
 box-shadow:0px 0px 10px rgba(0,0,0,1);;
 }

td {
 border: 1px solid rgb(56, 135, 48);
 padding: 15px;
 text-align: left;
 height: 0.5cm;
 width:2cm
 }

 th {
 background-color: #04AA6D;
 color: white;
 }

 tr:nth-child(even) {
 background-color: #39397000;
 }

 tr:nth-child(odd){
    background-color:midnightblue;
 }

 tr:hover {
 background-color: #1a4f87ad;
 }
 #search-box {
            width: 300px;
            height: 30px;
            margin: 0 auto;
            display: block;
            margin-bottom: 20px;
        }

        #search-button {
            width: 100px;
            height: 30px;
            margin: 0 auto;
            display: block;
        }
 </style>
 
 <script>
    const searchBox = document.getElementById('search-box');
    const tableBody = document.getElementById('table-body');

    searchBox.addEventListener('input', () => {
        const searchTerm = searchBox.value.toLowerCase();

        for (let i = 0; i < tableBody.rows.length; i++) {
            const row = tableBody.rows[i];
            const cells = row.cells;

            if (cells[1].innerText.toLowerCase().includes(searchTerm) ||
                cells[2].innerText.toLowerCase().includes(searchTerm) ||
                cells[3].innerText.toLowerCase().includes(searchTerm) ||
                cells[4].innerText.toLowerCase().includes(searchTerm) ||
                cells[5].innerText.toLowerCase().includes(searchTerm) ||
                cells[6].innerText.toLowerCase().includes(searchTerm) ||
                cells[7].innerText.toLowerCase().includes(searchTerm) ||
                cells[8].innerText.toLowerCase().includes(searchTerm) ||
                cells[9].innerText.toLowerCase().includes(searchTerm) ||
                cells[10].innerText.toLowerCase().includes(searchTerm) ||
                cells[11].innerText.toLowerCase().includes(searchTerm) ||
                cells[12].innerText.toLowerCase().includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }

        if (searchBox.value) {
            const matchingRow = Array.from(tableBody.rows).find(row =>
                row.cells[1].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[2].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[3].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[4].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[5].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[6].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[7].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[8].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[9].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[10].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[11].innerText.toLowerCase().includes(searchTerm) ||
                row.cells[12].innerText.toLowerCase().includes(searchTerm)
            );

            if (matchingRow) {
                const rowIndex = Array.from(tableBody.rows).indexOf(matchingRow);
                tableBody.scrollTop = rowIndex * matchingRow.offsetHeight;
            }
        }
    });
</script>

</head>
<body>
<header>Agricultural Society</header>
<h1>Members' Account details</h1>
<br><br>    <input type="text" id="search-box" placeholder="Search...">
    <button id="search-button">Search</button> <br><br>
<table>
 <thead>
 <tr>
 <th>Member ID</th>
 <th>Surname</th>
 <th>First Name</th>
 <!--<th>Date of Birth</th>-->
 <th>Gender</th>
 <th>Contact</th>
 <th>Membership</th>
 <th>Entry Fees</th>
 <th>Annual Subscription</th>
 <th>Home branch</th>
 <!--<th>Join Date</th>-->
 </tr>
 </thead>
 <tbody>
<?php
$serverName = "KEZIL-3351";
$database = "Agrc";
$uid = "UserKZ";
$password = "qwerty";

$connection = [
"Database" => $database,
"uid" => $uid,
"PWD" => $password
];
$conn = sqlsrv_connect($serverName,$connection);
if(!$conn)
  die(print_r(sqlsrv_errors(),true));
else
$tsql = "SELECT * FROM dbo.Members";
$stmt = sqlsrv_query($conn,$tsql);
if($stmt === false)
{
 echo 'Error';
}
while($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
  echo "<tr>";
  echo "<td>". $obj['MEMBER_ID']. "</td>";
  echo "<td>". $obj['Sname']. "</td>";
  echo "<td>". $obj['Fname']. "</td>";
 //echo"<td>". $date1 = new DateTime($obj['D_o_b'])."</td>";
  echo "<td>". $obj['Gender']. "</td>";
  echo "<td>". $obj['contact']. "</td>";
  echo "<td>". $obj['Membership']. "</td>";
  echo "<td>". $obj['Entry_Fees']. "</td>";
  echo "<td>". $obj['Annual_subscription']. "</td>";
  echo "<td>". $obj['Home_branch']. "</td>";
 // echo"<td>". $date1 = new DateTime($obj['Join_date'])."</td>";
  echo "</tr>";
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
 </tbody>
</table>

</body>
<footer>
          &gt;&gt;&gt;&copy;GROUP 35 &trade;&lt;&lt;&lt; <br>         
<a href="https://www.twitter.com/login/" class="fa fa-twitter"></a>
<a href="https://www.facebook.com/login/" class="fa fa-facebook"></a> <br>
<a href="https://www.google.com/" class="fa fa-google"></a>
<a href="https://www.linkedin.com/login/" class="fa fa-linkedin"></a><br>
<a href="https://www.pintrest.com/login/" class="fa fa-pinterest"></a>
<a href="https://www.instagram.com/login/" class="fa fa-instagram"></a><br>
<a href="https://www.snapchat.com/login/" class="fa fa-snapchat-ghost"></a>
<a href="https://www.skype.com/login/" class="fa fa-skype"></a><br>
<a href="https://www.android.com/login/" class="fa fa-android"></a>
<a href="https://www.tumblr.com/login/" class="fa fa-tumblr"></a><br>
<a href="https://www.yahoo.com/" class="fa fa-yahoo"></a>
<a href="https://www.reddit.com/login/" class="fa fa-reddit"></a><br>
        </footer>   
</html>