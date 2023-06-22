
    
   
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        
        .container {
            width: 600px;
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
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #cccccc;
        }
        
        th {
            background-color: #4CAF50;
            color: #ffffff;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 10px;
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


    <div class="container">
        <h2>GreenGuide - Price Entries</h2>
        <h2><?PHP
        if(isset($_SESSION["id"])){
            
        echo $_SESSION["id"];
        }
        
        ?></h2>
        

              
        <form action='submitdata.php' method='post'>
        <div style="text-align: center;">
        <label for="date">Select Date:</label>
        <input type="date" id="date" name="date">
    </div>
            <table>
                <tr>
                
                    <th>Food</th>
                    <th>Price</th>
                </tr>
                
                <tr>
                    <td>Mango</td>
                    <td><input type="text" name="price_mango"></td>
                </tr>
                <tr>
                    <td>Banana</td>
                    <td><input type="text" name="price_banana"></td>
                </tr>
                <tr>
                    <td>Apple</td>
                    <td><input type="text" name="price_apple"></td>
                </tr>
                <tr>
                    <td>Orange</td>
                    <td><input type="text" name="price_orange"></td>
                </tr>
                <tr>
                    <td>Guava</td>
                    <td><input type="text" name="price_guava"></td>
                </tr>
                <tr>
                    <td>Grapes</td>
                    <td><input type="text" name="price_grapes"></td>
                </tr>
                <tr>
                    <td>Watermelon</td>
                    <td><input type="text" name="price_watermelon"></td>
                </tr>
                <tr>
                    <td>Melon</td>
                    <td><input type="text" name="price_melon"></td>
                </tr>
                <tr>
                    <td>Pomegranate</td>
                    <td><input type="text" name="price_pomegranate"></td>
                </tr>
                <tr>
                    <td>Pineapple</td>
                    <td><input type="text" name="price_pineapple"></td>
                </tr>
                <tr>
                    <td>Papaya</td>
                    <td><input type="text" name="price_papaya"></td>
                </tr>
                <tr>
                    <td>Strawberry</td>
                    <td><input type="text" name="price_strawberry"></td>
                </tr>
                <tr>
                    <td>Plum</td>
                    <td><input type="text" name="price_plum"></td>
                </tr>
                <tr>
                    <td>Peach</td>
                    <td><input type="text" name="price_peach"></td>
                </tr>
                <tr>
                    <td>Apricot</td>
                    <td><input type="text" name="price_apricot"></td>
                </tr>
                <tr>
                    <td>Tomato</td>
                    <td><input type="text" name="price_tomato"></td>
                </tr>
                <tr>
                    <td>Potato</td>
                    <td><input type="text" name="price_potato"></td>
                </tr>
                <tr>
                    <td>Onion</td>
                    <td><input type="text" name="price_onion"></td>
                </tr>
                <tr>
                    <td>Garlic</td>
                    <td><input type="text" name="price_garlic"></td>
                </tr>
                <tr>
                    <td>Spinach</td>
                    <td><input type="text" name="price_spinach"></td>
                </tr>
                <tr>
                    <td>Capsicum</td>
                    <td><input type="text" name="price_capsicum"></td>
                </tr>
                <tr>
                    <td>Cabbage</td>
                    <td><input type="text" name="price_cabbage"></td>
                </tr>
                <tr>
                    <td>Cauliflower</td>
                    <td><input type="text" name="price_cauliflower"></td>
                </tr>
                <tr>
                    <td>Carrot</td>
                    <td><input type="text" name="price_carrot"></td>
                </tr>
                <tr>
                    <td>Radish</td>
                    <td><input type="text" name="price_radish"></td>
                </tr>
                <tr>
                    <td>Ladyfinger (Okra)</td>
                    <td><input type="text" name="price_ladyfinger"></td>
                </tr>
                <tr>
                    <td>Eggplant</td>
                    <td><input type="text" name="price_eggplant"></td>
                </tr>
                <tr>
                    <td>Green Beans</td>
                    <td><input type="text" name="price_greenbeans"></td>
                </tr>
                <tr>
                    <td>Peas</td>
                    <td><input type="text" name="price_peas"></td>
                </tr>
                <tr>
                    <td>Bitter gourd (Karela)</td>
                    <td><input type="text" name="price_bittergourd"></td>
                </tr>
            </table>
            <input type="submit" value="Submit">
            
        </form>
        <br>
        <form  action="logout.php" method='post'>
        <input type="submit" value='logout'>
    </form>
        
        
    </div>


