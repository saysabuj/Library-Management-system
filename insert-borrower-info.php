
<?php

$link = mysqli_connect("localhost", "root", "", "librarydb");
 
// Check connection
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// to store form data to the declaration variable 
 $book_id = mysqli_real_escape_string($link, $_POST['book_id']);
 $book_title = mysqli_real_escape_string($link, $_POST['book_title']);
 $sid = mysqli_real_escape_string($link, $_POST['sid']);
 $borrower = mysqli_real_escape_string($link, $_POST['borrower']);
 $borrow_date = mysqli_real_escape_string($link, $_POST['borrow_date']);
 $back_date = mysqli_real_escape_string($link, $_POST['back_date']);

 
 
 
// attempt insert query execution
$sql = "INSERT INTO borrow(bid,book_title,s_id,stu_name,br_date,return_date) VALUES ('$book_id','$book_title','$sid','$borrower','$borrow_date','$back_date')";
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


