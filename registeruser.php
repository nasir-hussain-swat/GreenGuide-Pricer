
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post' action="">
        admin id: <br>
        <input type="text" name="adminId" id=""><br>
        Email:<br>
        <input type="email" name="email" id=""><br>
        password:<br>
        <input type="password" name="password" id="">
        <br><input type="submit" name='submit'>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $Upassword=$_POST['password'];
    $adminID=$_POST['adminId'];
    if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $password = "password123";
        $dbname = "greenguide";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: ");
                }
         else{
           
// Assuming you have established a connection to the database


$hashedPassword = password_hash($Upassword, PASSWORD_DEFAULT);

$query = "INSERT INTO admin (admin_id , Email , Password,) VALUES ('$adminID',$email', '$hashedPassword')";
$result=mysqli_query($conn, $query);
if($result){
    echo 'success';
}
else{
    echo 'failed';
};



         }
    }
    
}


         ?>