<?php

echo "<html>
    <head>
        <title>REST API learning environment</title>
    </head>
    <body>
        <h1>Welcome to my environment!</h1>
        <div style='font-family: sans-serif;'>I will now learn how to implement a REST API...</div>

        <div>I will learn from <a href='https://www.codeofaninja.com/2017/02/create-simple-rest-api-in-php.html'>this site</a>.</div>";

        
        echo "Now from within php...<br>"; 
        
        // include database and object files
        // include_once "api/config/database.php";
        
        // instantiate database and product object
        // $database = new Database();
        // $db = $database->getConnection();
        
        $dbHost =     "localhost";
        $dbDatabase = "api_db";
        $dbUser =     "root";
        $dbPassword = "rootpwd";
        $dbPort =     "3306";
    
        $dsn = sprintf("mysql:host=%s;dbname=%s;port=%s", $dbHost, $dbDatabase, $dbPort);
    
        try {
            $db = new PDO($dsn, $dbUser, $dbPassword);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "<br>ERROR";
            echo "<br>" . $e->getMessage() . "-";
            $db = null;
        }
        
    echo "</body></html>";

?>