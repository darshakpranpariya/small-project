<?php
  $title=$_POST['title'];
  $price=$_POST['price'];
  $author=$_POST['author'];

  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'BRM_DB');
  $q="insert into book(title,price,author) values('$title',$price,'$author')";
  $status=mysqli_query($con,$q);
  mysqli_close($con);

?>
<html>
<head>
  <title>insertion</title>
</head>
<body>
   <h1>BOOK RECORD MANAGEMENT SYSTEM</h1>
   <?php if($status==1)
              echo "Record inserted";
         else
              echo "Record are not inserted";
   ?> 
   <p></p>  
   If you insert more Record then,<a href="insertForm.php">click hear</a>
   <p></p>
   If you want to return at home page then,<a href="home.php">click here</a>
</body>
</html>
