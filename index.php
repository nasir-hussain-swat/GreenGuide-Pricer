<!DOCTYPE html>
<html>
<head>
    <title>Tile Page</title>
    <style>
        body {
            background-color: #f2f2f2;
            text-align: center;
        }

        .tiles {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            padding-top: 50px;
        }

        .tile {
            width: 300px;
            height: 300px;
            margin: 10px;
            background: linear-gradient(135deg, var(--sea), var(--sand));
            border-radius: 10px;
            transition: background 0.3s;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .tile:hover {
            background: linear-gradient(135deg, var(--seaDark), var(--sandDark));
        }

        .tile:active {
            background: linear-gradient(135deg, var(--sandDark), var(--seaDark));
        }

        .tile a {
            
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-decoration: none;
            color: #fff;
            font-size: 20px;
        }

        .tile h2 {
            margin: 0;
            padding: 10px;
            font-size: 28px;
            text-align: center;
            color:#0d4630;
        }

        .tile p {
            margin: 0;
            padding: 5px;
            font-size: 18px;
            text-align: center;
            color:#0d4630;

        }
    </style>
</head>
<body>
    <?php 
    include 'navbar.php'
    ?>
    <div class="tiles">
        <div class="tile">
        <a href="showdata.php?header=Batkhela">
                <h2>BATKHELA</h2>
                <p>Click to view prices of food in<br> BATKHELA</p>
            </a>
        </div>
        <div class="tile">
        <a href="showdata.php?header=Thana">
                <h2>THANA</h2>
                <p>Click to view prices of food in <br> THANA</p>
            </a>
        </div>
        <div class="tile">
        <a href="showdata.php?header=Chakdara">
                <h2>CHAKDARA</h2>
                <p>Click to view prices of food in <br>CHAKDARA</p>
            </a>
        </div>
    </div>
    <?php 
    include 'footer.php'
    ?>
</body>
</html>
