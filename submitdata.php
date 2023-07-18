<?php
session_start();
$id=$_SESSION['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){

// Validate and sanitize the inputs
function validateInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Get the form inputs
$date = $_POST['date'];
$date = validateInput($date);

$price_mango = validateInput($_POST['price_mango']);
$price_banana = validateInput($_POST['price_banana']);
$price_apple = validateInput($_POST['price_apple']);
$price_orange = validateInput($_POST['price_orange']);
$price_guava = validateInput($_POST['price_guava']);
$price_grapes = validateInput($_POST['price_grapes']);
$price_watermelon = validateInput($_POST['price_watermelon']);
$price_melon = validateInput($_POST['price_melon']);
$price_pomegranate = validateInput($_POST['price_pomegranate']);
$price_pineapple = validateInput($_POST['price_pineapple']);
$price_papaya = validateInput($_POST['price_papaya']);
$price_strawberry = validateInput($_POST['price_strawberry']);
$price_plum = validateInput($_POST['price_plum']);
$price_peach = validateInput($_POST['price_peach']);
$price_apricot = validateInput($_POST['price_apricot']);
$price_tomato = validateInput($_POST['price_tomato']);
$price_potato = validateInput($_POST['price_potato']);
$price_onion = validateInput($_POST['price_onion']);
$price_garlic = validateInput($_POST['price_garlic']);
$price_spinach = validateInput($_POST['price_spinach']);
$price_capsicum = validateInput($_POST['price_capsicum']);
$price_cabbage = validateInput($_POST['price_cabbage']);
$price_cauliflower = validateInput($_POST['price_cauliflower']);
$price_carrot = validateInput($_POST['price_carrot']);
$price_radish = validateInput($_POST['price_radish']);
$price_ladyfinger = validateInput($_POST['price_ladyfinger']);
$price_eggplant = validateInput($_POST['price_eggplant']);
$price_greenbeans = validateInput($_POST['price_greenbeans']);
$price_peas = validateInput($_POST['price_peas']);
$price_bittergourd = validateInput($_POST['price_bittergourd']);
$date = validateInput($_POST['date']);




// Connect to the database



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
// Prepare and execute the SQL statement
if($id=='Chakdara'){$query = "INSERT INTO chakdara_prices (Tomato,Potato,Onion,Garlic,Spinach,Capsicum,Cabbage,Cauliflower,Carrot,Radish,Ladyfinger_Okra,	Eggplant,Green_Beans,Peas,Bitter_gourd_Karela,Mango,Banana,Apple,Orange,Guava,Grapes,Watermelon,Melon,Pomegranate,Pineapple,Papaya,Strawberry,Plum,Peach,Apricot,Date)
 VALUES($price_mango, $price_banana, $price_apple, $price_orange, $price_guava, $price_grapes, $price_watermelon, $price_melon, $price_pomegranate, $price_pineapple, $price_papaya, $price_strawberry, $price_plum, $price_peach, $price_apricot, $price_tomato, $price_potato, $price_onion, $price_garlic, $price_spinach, $price_capsicum, $price_cabbage, $price_cauliflower, $price_carrot, $price_radish, $price_ladyfinger, $price_eggplant, $price_greenbeans, $price_peas, $price_bittergourd, '$date'
    ) ";
   
 
}
else if($id=='Batkhela'){
    $query = "INSERT INTO batkhela_prices (Tomato,Potato,Onion,Garlic,Spinach,Capsicum,Cabbage,Cauliflower,Carrot,Radish,Ladyfinger_Okra,Eggplant,Green_Beans,Peas,Bitter_gourd_Karela,Mango,Banana,Apple,Orange,Guava,Grapes,Watermelon,Melon,Pomegranate,Pineapple,Papaya,Strawberry,Plum,Peach,Apricot,Date) 
    VALUES($price_mango, $price_banana, $price_apple, $price_orange, $price_guava, $price_grapes, $price_watermelon, $price_melon, $price_pomegranate, $price_pineapple, $price_papaya, $price_strawberry, $price_plum, $price_peach, $price_apricot, $price_tomato, $price_potato, $price_onion, $price_garlic, $price_spinach, $price_capsicum, $price_cabbage, $price_cauliflower, $price_carrot, $price_radish, $price_ladyfinger, $price_eggplant, $price_greenbeans, $price_peas, $price_bittergourd, '$date'
    ) ";
   
      
  }

else if($id=='Thana'){
    $query = "INSERT INTO thana_prices (Tomato,Potato,Onion,Garlic,Spinach,Capsicum,Cabbage,Cauliflower,Carrot,Radish,Ladyfinger_Okra,	Eggplant,Green_Beans,Peas,Bitter_gourd_Karela,Mango,Banana,Apple,Orange,Guava,Grapes,Watermelon,Melon,Pomegranate,Pineapple,Papaya,Strawberry,Plum,Peach,Apricot,Date) 
    VALUES($price_mango, $price_banana, $price_apple, $price_orange, $price_guava, $price_grapes, $price_watermelon, $price_melon, $price_pomegranate, $price_pineapple, $price_papaya, $price_strawberry, $price_plum, $price_peach, $price_apricot, $price_tomato, $price_potato, $price_onion, $price_garlic, $price_spinach, $price_capsicum, $price_cabbage, $price_cauliflower, $price_carrot, $price_radish, $price_ladyfinger, $price_eggplant, $price_greenbeans, $price_peas, $price_bittergourd, '$date'
    ) ";
    
  
}


$result = mysqli_query($conn, $query);
header("Location:index.php");
session_destroy();
}
}
?>
