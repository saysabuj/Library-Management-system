<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">ABCD Library </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin-panel.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Book<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="book-list.php">Book List</a></li>
          <li><a href="#">Writter List</a></li>
          <li><a href="insert-book-form.php">Insert Book info</a></li>
          <li><a href="#">Update Book info</a></li>
          <li><a href="#">Delete Book info</a></li>
        </ul>
      </li>
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Borrow Book<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="borrow-book-form.php">Borrow a book</a></li>
          <li><a href="borrower-list.php">Borrower List</a></li>
          <li><a href="#">Update Borrower</a></li>
          <li><a href="#">Remove Borrower</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Notice<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Insert Notice</a></li>
          <li><a href="#">Update Notice</a></li>
          <li><a href="#">Delete Notice</a></li>
        </ul>
      </li>
      
      <li><a href="#">Change Logo</a></li>
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Edit Other info<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Change FAQ</a></li>
          <li><a href="#">Change Contact</a></li>
          <li><a href="#">Change About</a></li>
            <li><a href="#">Change Rules</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
  
</div>

</body>
</html>
<HTML>
<HEAD>
</HEAD>
<body>
<H3><center>Admin Panel for ABCD Library</center></H3><a>
<hr>

</body>

</HTML>

<?php


?>