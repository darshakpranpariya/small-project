<?php
  $size=sizeof($_POST);
  $j=1;
  for($i=1;$i<=$size;$i++,$j++)
    {
       $index="b".$j;
       if(isset($_POST[$index]))
          $b_id[$i]=$_POST[$index];
       else
          $i--;
    }

  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'BRM_DB');
   
  for($k=1;$k<=$size;$k++)
   {
    $q="delete from book where book_id=$b_id[$k]";
    mysqli_query($con,$q);
   }
   mysqli_close($con);

?>
<?php
   echo $size. "Record are deleted";
?>
<p></p>
Go back to the home page,<a href="home.php">click here</a>
 