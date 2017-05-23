<html>
<head>
<style>
border {
  border-radius: 15px 50px 30px;
  border: 5px solid #BADA55;
  padding: 20px;
  width: 200px;
  height: 150px;
}
</style>
</head>
<body>

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
// Find total Books 
// query for retrive all data
$sql = "SELECT count(id) FROM book";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
     //echo "<tr><td>" . $row["sum(amount)"]."</td></tr>";   
         $total = $row["count(id)"];
        
     }
     echo "</table>";
} else {
     echo "0 results";
}

//$conn->close();
?>

<border> Total Book in the University Library: <?=$total?></border> 
</body>

</html>

 		 		