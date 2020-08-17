<?php

echo "<html><head><title>Learning</title></head><body><h1>Welcome to my environment!</h1>";

        
        echo "Connecting to DB...<br>"; 
        
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