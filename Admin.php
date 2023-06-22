
<?php

session_start();
if(!isset($_SESSION['id'])){
    header("Location:login.php");
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>batkhela</title>
</head>
<body>
    <?php 
    include 'navbar.php';
    
    include 'addData.php';

    ?>
    
    <?php 
    include 'footer.php'
    ?>
    
</body>
</html>
