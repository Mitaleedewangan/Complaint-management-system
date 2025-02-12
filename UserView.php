<html>
<body>
<div>
<h1>Complaint Management System</h1>
<?php
 $a= "select  * from userComplain";
 $con=mysqli_connect("localhost","root","@mitalee2003","Profile");
 $rs=mysqli_query($con,$a);


 echo"<table border='1'>";
  echo "<tr>
   <th>Name</th>
   <th>UserID</th>
   
   <th>Complaint</th>
   </tr>";
   

 while($row=mysqli_fetch_array($rs))
 {
 
   
   
    echo"<tr>";
    echo"<td>{$row[0]}</td>";
    echo"<td>{$row[1]}</td>";
    
    echo"<td>{$row[3]}</td>";
    
    echo"</tr> ";
 }
   
   echo" </table>";
   
 
 
 ?>
 </div>
 </body>
 </html>

 <style>
 body{
     background:linear-gradient(to bottom right , #00c9ff , #92fe9d);
     font-family: Arial, Helvetica, sans-serif;
     text-align: center;
     margin: 0;
     padding: 0;
    
     display: flex;
     align-items: center;
     justify-content: center;

 }
 
 table, th, td {
     border: 1px solid black;
     border-collapse: collapse;
 }
 
 th, td {
     padding: 8px;
    
 }
div{
    background-color: white;
    width: 500px;
    height: 630px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.8);
}

</style>
