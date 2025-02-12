<html>
<body>
<div>
<h1>Add Complaint</h1><br><br>
<form action="" method="post">
UserID: <input type="text" name="userID"><br><br>
Complaint: <input type="text" name="complaint"><br><br>
<input type="submit" value="Complain">

</form>
</div>
</body>
</html>

<?php
   

if(isset($_POST['userID'])){
    $userID = $_POST['userID'];
    $complaint = $_POST['complaint'];
    $s="Pending";
    
   
    $conn = mysqli_connect("localhost", "root", "@mitalee2003", "Profile");
    
    $query ="INSERT INTO userComplain VALUES ('$userID', '$complaint', NULL, '$s')";


    $result = mysqli_query($conn, $query);

    if($result){
        echo "Complaint Successful"; 
        
         
    }
    else{
        echo "Complaint Failed";
    }
}

?>

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
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.8);
}
input[type=submit]{
    background:linear-gradient(to bottom right , #00c9ff , #92fe9d);
    color: black;
    width: 150px;
    padding: 10px 20px; 
    border: none;
    font-size: 18px;
    font-weight: bold;
}
input[type=text]{
   
   height: 30px;
   width: 250px;
 
    font-size: 16px;
    font-weight: bold;
}
h1{
    font-size: 30px;
   
}