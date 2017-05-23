<?php
include_once 'admin-panel.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
</head>
<body class="home_body">
<div class="container">
<div class="reader-form">
<div class="home_header header"><h2>Borrower Information:</h2></div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
// query for retrive all data
$sql = "SELECT bid, book_title,s_id,stu_name, br_date, return_date FROM borrow";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "<table><tr><th>ISDN</th><th>BOOK TITLE</th><th>Student's ID</th><th>Student's Name</th><th>Borrow Date</th><th>Return Date</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["bid"]. "</td><td>" . $row["book_title"]. "</td><td>".$row["s_id"]."</td><td>".$row["stu_name"]."</td><td>" . $row["br_date"]. "</td><td>" . $row["return_date"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$conn->close();
?>  

<div class="bookinfo">  
</div>     
</div>  
</div>
</body>
</html>


