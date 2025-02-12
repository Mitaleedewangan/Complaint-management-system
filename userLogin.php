<html>
<body>
<div>
<form action="" method="post">
<h1> User Login </h1><br><br>
UserID: <input type="text" name="userID"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" value="Login"><br><br>
<a href="userView.php">if you already have an account, click here to view your complaints</a>
<br><br><br>
<hr>
<h3><a href="userRegister.php">if you don't have an account, click here to register</a></h3>


</form>
</body>
</html>
</div>

<?php

if(isset($_POST['userID'])){
    
    $userID = $_POST['userID'];
    $password = $_POST['password'];
    
    $conn = mysqli_connect("localhost", "root", "@mitalee2003", "Profile");
    $query = "SELECT * FROM user WHERE userid = '$userID' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_array($result);

    if($result){
        header("location: userComplain.php");
        echo "Login Successful";
        exit();
    }
    else{
        echo "Login Failed";
    }
}
?>

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
div{
    background-color: white;
    width: 500px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.8);
}

a{
    color:blue;
    text-decoration: none;
}

input[type=submit]{
    background:linear-gradient(to bottom right , #00c9ff , #92fe9d);
    color: black;
    width: 100px;
    padding: 10px 20px;
    border: none;
    font-size: 16px;
    font-weight: bold;
}
hr{
    border: 1px solid black;
    width: 500px;
}
a:hover{
    color: red;
}
h3{
    margin-top: 30px;
}
input[type=text], input[type=password]{
   
   height: 30px;
   width: 250px;
   
    font-size: 16px;
    font-weight: bold;
}
h1{
    font-size: 40px;
    margin-top: 30px;
}
</style>