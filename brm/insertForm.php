<html>
<head>
  <title>insert Form</title>
  <link rel="stylesheet" type="text/css" href="./css/css3.css"/>
</head>
<body>
  <h1>BOOK RECORD MANAGEMENT SYSTEM</h1>
  <form action="insertion.php" method="post">
    <table>
       <tr>
         <th>title</th>
         <td><input type="text" name="title" required/></td>
       </tr>
       <tr>
         <th>price</th>
         <td><input type="text" name="price" required/></td>
       </tr>
       <tr>
         <th>author</th>
         <td><input type="text" name="author"/></td>
       </tr>
       <tr>
         <td><input type="submit" value="submit"/></td>
       </tr>
    </table>
   </form>
</body>
</html>