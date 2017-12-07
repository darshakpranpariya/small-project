<?php
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'BRM_DB');
  $q="select * from book";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  mysqli_close($con);
?>
<html>
<head>
  <title>view</title>
  <link rel="stylesheet" type="text/css" href="./css/css2.css" />
</head>
<body>
  <h1>BOOK RECORD MANAGEMENT SYSTEM</h1>
<form action="updation.php" method="post">
  <table id="t1">
  <tr id="r1">
   <th>book_id</th>
   <th>title</th>
   <th>price</th>
   <th>author</th> 
  <tr>
  <?php
    for($i=1;$i<=$num;$i++)
      {
         $row=mysqli_fetch_array($result);
  ?>
     <tr>
       <td><?php echo $row['book_id']; ?><input type="hidden" name="book_id<?php echo $i ;?>" value="<?php echo $row['book_id']; ?>"</td>
       <td><input type="text" value="<?php echo $row['title'];?>" name="title<?php echo $i ;?>"</td>
       <td><input type="text" value="<?php echo $row['price'] ;?>"name="price<?php echo $i; ?>"</td>
       <td><input type="text" value="<?php echo $row['author'];?>" name="author<?php echo $i; ?>"</td>
     </tr>
  <?php
      }
  ?>
  </table>
 <input type="submit" value="Update"/>
</form>
  <p></p>
  If you want to return at home page then,<a href="home.php">click here</a>
</body>
</html>