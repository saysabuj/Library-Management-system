<?php
include_once 'header.php';
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
<div class="home_header header"><h2>Book Information of BBA Department</h2></div>
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
$sql = "SELECT bid, book_title, author, publisher FROM book where dept= 'bba'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ISDN</th><th>BOOK TITLE</th><th>WRITTER</th><th>PUBLISHER</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["bid"]. "</td><td>" . $row["book_title"]. "</td><td>".$row["author"]."</td><td>".$row["publisher"]."</td></tr>";
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


