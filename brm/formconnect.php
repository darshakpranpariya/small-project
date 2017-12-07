<?php
  session_start();
  $username=$_POST['username'];
  $password=$_POST['password'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'info');
  
  $q="insert into user(username,password) values('$username',$password)";
  $status=mysqli_query($con,$q);
  mysqli_close($con);
  if($status==1)
  {
	  $_SESSION['username']=$username;
	  header('location:http://localhost/brm/home.php');
  }	  
  else 
	  echo "failed";
  
  

?>