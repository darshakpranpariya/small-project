<?php
$size=sizeof($_POST);
$record=$size/4;
for($i=1;$i<=$record;$i++)
{
   $index1="book_id".$i;
   $book_id[$i]=$_POST[$index1];
   $index2="title".$i;
   $title[$i]=$_POST[$index2];
   $index3="price".$i;
   $price[$i]=$_POST[$index3];
   $index4="author".$i;
   $author[$i]=$_POST[$index4];
}
$con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'BRM_DB');
for($i=1;$i<=$record;$i++)
{
$q="update book SET title='$title[$i]',price=$price[$i],author='$author[$i]' WHERE book_id=$book_id[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<html>
<head>
  <title>updation</title>
</head>
<body>
   <h1>BOOK RECORD MANAGEMENT SYSTEM</h1>
   <?php
              echo "Records are updated";       
    ?> 
   <p></p>  
   If you want to return at home page then,<a href="home.php">click hear</a>
</body>
</html>
