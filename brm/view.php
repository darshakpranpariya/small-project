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
       <td><?php echo $row['book_id']; ?></td>
       <td><?php echo $row['title']; ?></td>
       <td><?php echo $row['price']; ?></td>
       <td><?php echo $row['author']; ?></td>
     </tr>
  <?php
      }
  ?>
  </table>
  <p></p>
  If you want to return at home page then,<a href="home.php">click here</a>
</body>
</html>
