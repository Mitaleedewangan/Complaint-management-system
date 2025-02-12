
<?php


$id = $_GET['id'];
$con=mysqli_connect("localhost","root","@mitalee2003","Profile");
$query = "UPDATE userComplain SET status = 'Accepted' WHERE userName = '$id'";

if(mysqli_query($con,$query)){
echo "Complaint Accepted";
}
else{
echo "Complaint Failed";
}
?>
    
  