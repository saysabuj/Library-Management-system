
<?php

$link = mysqli_connect("localhost", "root", "", "librarydb");
 
// Check connection
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// to store form data to the declaration variable 
 $book_id = mysqli_real_escape_string($link, $_POST['book_id']);
 $book_title = mysqli_real_escape_string($link, $_POST['book_title']);
 $writter = mysqli_real_escape_string($link, $_POST['writter']);
 $publisher = mysqli_real_escape_string($link, $_POST['publisher']);
 $department = mysqli_real_escape_string($link, $_POST['department']);

 
 
 
// attempt insert query execution
$sql = "INSERT INTO book(bid,book_title,author,publisher,dept) VALUES ('$book_id','$book_title','$writter','$publisher','$department')";
if(mysqli_query($link, $sql)){
    echo "Data Inserted Successfully ";
   
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>

<html>
<head>

</head>
<body>
<br>
<a class="button button2 hvr-grow" href="admin-panel.php">GO BACK HOME</a>
</body>
</html>


