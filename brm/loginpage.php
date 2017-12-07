<html>
<head>
   <link rel="stylesheet" type="text/css" href="./css/My first form css.css"/>
   <title>My form</title>
</head>
<body>
   <script>
     function validation()
     {
         
        var result=true;
        var e1=document.getElementsByName('password')[0].value;
        var atindex=e1.indexof('@');
        if(atindex<0)
           result=false;
        return(result);
     } 
   </script>
    <script>
       alert("uppercasefirstlowercase@digit form is riquired");
    </script>
    <script>

          
       function effectm1()
       {
         var a=document.getElementById("m1");
         a.style.backgroundColor="green";
       }
       function effectbackm1()
       {
         var a=document.getElementById("m1");
         a.style.backgroundColor="khaki";
       }
       function effect()
       {
         var a=document.getElementById("e1");
         a.style.backgroundColor="pink";
       }
       function effectback()
       {
         var a=document.getElementById("e1");
         a.style.backgroundColor="lightblue";
       }
       
        function effect2()
       {
         var a=document.getElementById("e2");
         a.style.backgroundColor="green";
       }
       function effectback2()
       {
         var a=document.getElementById("e2");
         a.style.backgroundColor="lightblue";
       }

        function effect3()
       {
         var a=document.getElementById("e3");
         a.style.backgroundColor="white";
       }
       function effectback3()
       {
         var a=document.getElementById("e3");
         a.style.backgroundColor="lightblue";
       }

        function effect4()
       {
         var a=document.getElementById("e4");
         a.style.backgroundColor="orange";
       }
       function effectback4()
       {
         var a=document.getElementById("e4");
         a.style.backgroundColor="lightblue";
       }

        function effect5()
       {
         var a=document.getElementById("e5");
         a.style.backgroundColor="silver";
       }
       function effectback5()
       {
         var a=document.getElementById("e5");
         a.style.backgroundColor="lightblue";
       }
    </script>
   <h1 id="m1" onmouseover="effectm1()" onmouseout="effectbackm1()" >Log in</h1>
   <div id="d1">
    <form action="formconnect2.php" method="post"> 
     <table>
      <tr id="t1">  
        <th id="e1" onmouseover="effect()" onmouseout="effectback()">User name</th>
        <td><input type="text" name="username" placeholder="Username" /></td>
      </tr>
      <tr id="t2">
        <th  id="e2" onmouseover="effect2()" onmouseout="effectback2()">Pass-word</th>
        <td><input type="password" name="password" placeholder="Password" required /></td>
      </tr>
	 
       <tr id="t6">
          <td><input type="submit"/>
          <td><input type="reset"/>    
      </tr>
     </table>
   </form>
     
   </div>
   
</body>
</html>
