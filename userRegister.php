<html>
<body>
<div>
<h1>Register</h1><br><br>
<form action="" method="post">
UserName: <input type="text" name="userName"><br><br>
UserID: <input type="text" name="userID"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" value="Register">
<h3><a href="userLogin.php">if you already have an account, click here to login</a></h3>

</form>
</body>
</html>
</div>
<?php

if(isset($_POST['userID'])){
    $userName = $_POST['userName'];
    $userID = $_POST['userID'];
    $password = $_POST['password'];
    
    $conn = mysqli_connect("localhost", "root", "@mitalee2003", "Profile");
    $query = "INSERT INTO user VALUES ('$userName', '$userID', '$password')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Registration Successful";
    }
    else{
        echo "Registration Failed";
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
    height: 400px;
   
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.8);
}

a{
    color:blue;
    text-decoration: none;
}

input[type=submit]{
    background:linear-gradient(to bottom right , #00c9ff , #92fe9d);
    color: black;
    width: 150px;
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
   
}
</style>