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
   <h1 id="m1" onmouseover="effectm1()" onmouseout="effectbackm1()" >Sign Up</h1>
   <div id="d1">
    <form action="formconnect.php" method="post"> 
     <table>
      <tr id="t1">  
        <th id="e1" onmouseover="effect()" onmouseout="effectback()">User name</th>
        <td><input type="text" name="username" placeholder="Username" /></td>
      </tr>
      <tr id="t2">
        <th  id="e2" onmouseover="effect2()" onmouseout="effectback2()">Pass-word</th>
        <td><input type="password" name="password" placeholder="Password" required /></td>
      </tr>
	  <tr id="t3">
         <th  id="e3" onmouseover="effect3()" onmouseout="effectback3()">Birth-Date</th>
         <td><input type="date" name="date" placeholder="Birth-Date"/></td>
      </tr>
      <tr id="t4">
        <th  id="e4" onmouseover="effect4()" onmouseout="effectback4()">Gender<th>
        <td><input type="radio" name="gender"/>M
            <input type="radio" name="gender"/>F</td>
      </tr>
      <tr id="t5">
          <th  id="e5" onmouseover="effect5()" onmouseout="effectback5()" placeholder="Select your city">city</th>
          <td><select>
              <option>Select your city</option>
              <option>surat</option>
              <option>Rajkot</option>
              <option>Ahemdabad</option>
              <option>Mahesana</option>
              <option>mumbai</option>
              <option>kolkatta</option>
              <option>Tokyo</option>
              <option>Aanand</option>
              <option>benglor</option>
              <option>Haydrabad</option>
              <option>Jaipur</option>
              <option>Bhopal</option>
          </select></td>
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
