<?php
    $user = 'root';
    $password = '';

    try{
        $conn = new PDO('mysql:host=localhost;dbname=finals_website_db', $user, $password); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    }catch (PDOExceptions $e) {
            echo "**ERROR** Database Connection Failed: $e";
    }
?>