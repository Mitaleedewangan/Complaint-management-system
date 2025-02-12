<div>
<h1>Complaint Management System</h1>
<?php

$con=mysqli_connect("localhost","root","@mitalee2003","Profile");

$a="select * from userComplain where status='Pending'";
$rs=mysqli_query($con,$a);
echo"<table border='1'>";
echo"<tr>";
echo"<th>Name</th>";

echo"<th>Complaint</th>";
echo"<th>Accept</th>";
echo"<th>Reject</th>";
echo"</tr>";



while($row=mysqli_fetch_array($rs))

{
   
   echo"<tr>";
   echo"<td>{$row[0]}</td>";
  
   echo"<td>{$row[1]}</td>";
   
   echo"<td><a href='AdminAccept.php?id={$row[0]}'>Accept</a></td>";
   echo"  "; 
   echo"<td><a href='AdminReject.php?id={$row[0]}'>Reject</a></td>";
   echo"</tr>";
}
   echo"</table>";
 
   
?>
</div>

<style>
body{
    background:linear-gradient(to bottom right , #00c9ff , #92fe9d);

    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;

}
div{
    background-color: white;
    width: 500px;
    height: 470px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.8);
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    
}