<?php
  session_start();
  $username=$_POST['username'];
  $password=$_POST['password'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'info');
  
  $q="select*from user where (username='$username'&& password=$password)";
  $result=mysqli_query($con,$q);
  $row=mysqli_num_rows($result);
  if($row==1)
  {
	  $_SESSION['username']=$username;
	  header('location:http://localhost/brm/home.php');
  }
 
  else
  {   
      
	  
	   header('location:http://localhost/brm/loginpage.php');
      
  } 
  
   mysqli_close($con);

?>