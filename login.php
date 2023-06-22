<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
    body {
        background-color: #f1f1f1;
        font-family: Arial, sans-serif;
    }

    .container {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    h2 {
        text-align: center;
        color: #333333;
        margin-bottom: 20px;
    }

    label {
        display: block;
        color: #555555;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>

</head>

<body>
    <?php include 'navbar.php'; ?>




    <br><br><br>
    <div class="container">
        <h2>Login</h2>
        <form method='post' action='#'>
            <label for="email">Email:</label>
            <span id="Eerror" style="border-bottom:2px solid pink; color:red;font-size:10px;">

            </span>
            <input type="text" id="email" name="email" placeholder="Enter your email">

            <label for="password">Password:</label>
            <span id="Perror" style="border-bottom:2px solid pink; color:red;font-size:10px;">

            </span>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <input type="submit" value="Login">
        </form>
    </div>

    <?php


$servername = "localhost";
$username = "root";
$password = "password123";
$dbname = "greenguide";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ");
        }
 else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email']; 
        $password=$_POST['password'];
        $msg='Fill This Field';
        if (empty($email) || empty($password)) {
            if(empty($email) && empty($password)) {
                echo '<script>document.getElementById("Eerror").innerHTML = "' . $msg . '";</script>';
                
                echo '<script>document.getElementById("Perror").innerHTML = "' . $msg . '";</script>';
    
            }
            elseif(empty($email) && !empty($password)){
                echo '<script>document.getElementById("Eerror").innerHTML = "' . $msg . '";</script>';
    
            }
            elseif(!empty($email) && empty($password)){
                echo '<script>document.getElementById("Perror").innerHTML = "' . $msg . '";</script>';
    
            }
            
           
        } 
    
    
    $query = "SELECT * FROM login WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
    // Step 3: Display the respective admin dashboard based on username
    $row = mysqli_fetch_assoc($result);
    $adminId = $row['id'];
    // echo $adminId;
    $_SESSION["email"]=$email;
    $_SESSION["password"]=$password;
    $_SESSION["id"]=$adminId;
   
    
    

    // Redirect to the corresponding admin dashboard based on the admin ID
   header("Location:Admin.php");
} else {
echo "Invalid credentials. Please try again.";
}
}




     
   

}    
?>
<br><br>
<?php 
    include 'footer.php'
    ?>

</body>

</html>