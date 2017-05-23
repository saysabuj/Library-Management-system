<?php
include_once 'admin-panel.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <style>
input[type=text], select {
    width: 30%;
    padding: 1px 1px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 4px 4px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 5px;
}
</style> 
</head>
<body>

<body class="home_body">

<div class="container">
  <div class="home_header header"><h3>Insert Book Information</h3></div>
  <form action="insert-book.php" method="post" class="bookinsert">
    <div class="insert-input">
      <label>Book ISDN:</label></br>
      <input type="text" placeholder="Enter book ID" name="book_id" value="">      
    </div>
    <div class="insert-input">    
    <label>Book Title:</label></br>
    <input type="text" placeholder="Enter book title" name="book_title" value="">
    </div>

    <div class="insert-input">
    <label>Author/Writter:  </label></br>
    <input type="text" placeholder="Enter Writter name" name="writter" value="">
    </div>

    <div class="insert-input">
    <label>Publisher/Publication:  </label></br>
    <input type="text" placeholder="Enter Publisher name" name="publisher" value="">
    </div>
 
    <div class="insert-input">
     <label>Department/Faculty: </label></br>
    <input type="text" placeholder="Enter Department name" name="department" value="">
    </div>

    <input type="submit" value="Insert"> 
  </form>

<div class="bookinfo">
   
</div>  
</div>

</body>
</html>


