<?php
   session_start();
   if(!isset($_SESSION['username']))
	       header('location:http://localhost/brm/loginpage.php');

?>


<html>
<head>
  <title>book record management system</title>
  <link rel="stylesheet" type="text/css" href="./css/css1.css"/>
</head>
<body>
   <h1>Hello <?php echo $_SESSION['username']; ?></h1>       
   <script> 
       function effectm1()
       {
         var a=document.getElementById("m1");
         a.style.backgroundColor="green";
       }
        function effectbackm1()
       {
         var a=document.getElementById("m1");
         a.style.backgroundColor="pink";
       }
   </script>
  <h1 id="m1" onmouseover="effectm1()" onmouseout="effectbackm1()">BOOK RECORD MANAGEMENT SYSTEM </h1>
                                                           
  <div id="d1">
	<div id="d2">
	  <h2><a href="insertForm.php">INSERT THE DATA</a></h2>
    </div> 
	<div id="d3">
	  <h2><a href="view.php">VIEW THE DATA</a></h2>
	</div>
	<div id="d4">
	  <h2><a href="deleteForm.php">DELETE THE DATA</a></h2>
	</div>
	<div id="d5">
	  <h2><a href="updateForm.php">UPDATE THE DATA</a></h2>
	</div>
	<div id="d6">
	  <h2 ><a id="l1" href="logout.php">Logout</a></h2>
	</div>
  </div>
</body>
</html>
