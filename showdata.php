<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>
    <style>
        :root {
            --sea: #1d9869;
            --seaDark: #156c4b;
            --sand: #5ed38d;
            --sandDark: #D2F6C5;
            --grey: #F6F7D4;
        }

        body {
            background-color: var(--grey);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: var(--seaDark);
            margin-bottom: 10px;
        }

        .data-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .data-tile {
            width: 45%;
            background-color: var(--sand);
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .data-tile h3 {
            color: var(--seaDark);
            margin-bottom: 5px;
        }

        .data-tile p {
            color: var(--sea);
            margin: 0;
        }

        .btn-container {
            margin-top: 20px;
            text-align: center;
        }

        .btn-container button {
            margin: 5px;
            padding: 10px 20px;
            background-color: var(--sea);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-container button:hover {
            background-color: var(--seaDark);
        }
    </style>
</head>
<body>
    <!-- HTML Form -->
    <form method="POST" action="">
        <label for="selected_date">Select a Date:</label>
        <input type="date" name="selected_date" id="selected_date" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Retrieve the value of the "header" parameter
    $header = $_GET['header'];

    // Use the value in your code
    echo "<h2>Showing Prices In " . $header . "</h2>";

    // Establish a database connection
    $servername = "localhost";
    $username = "root";
    $password = "password123";
    $dbname = "greenguide";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the date form has been submitted
    if (isset($_POST['submit'])) {
        // Get the selected date from the user
        $date = $_POST['selected_date'];

        // Query the database based on the selected date
        if ($header == 'Chakdara') {
            $query = "SELECT * FROM chakdara_prices WHERE Date = '$date'";
        } else if ($header == 'Thana') {
            $query = "SELECT * FROM thana_prices WHERE Date = '$date'";
        } else if ($header == 'Batkhela') {
            $query = "SELECT * FROM batkhela_prices WHERE Date = '$date'";
        }

        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // Data exists for the selected date
                $row = mysqli_fetch_assoc($result);

                // Display the column names and their values in tiles
                echo "<h2>Column Names and Values</h2>";
                echo "<div class='data-container'>";
                foreach ($row as $column => $value) {
                    echo "<div class='data-tile'>";
                    echo "<h3>$column</h3>";
                    echo "<p>$value</p>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                // No data exists for the selected date
                echo "<h2>Data does not exist for the selected date.</h2>";
                echo "<div class='btn-container'>";
                echo "<button onclick='window.location.href=\"index.php\"'>Go back to Home</button>";
                echo "<button onclick='window.location.href=\"showdata.php?header=$header\"'>Choose another date</button>";
                echo "</div>";
            }
        } else {
            // Error in executing the query
            echo "<h2>Error executing the query.</h2>";
        }
    }

    $conn->close();
    ?>

<?php 
    include 'footer.php'
    ?>
</body>
</html>
