<?php
    $dsn = 'mysql:host=localhost;dbname=blogdb';
    $username = 'root';
    $password = '';

    //define('ROOT_URL', 'http://localhost/SD2A-SERVERSIDE-DEV-CA2/');

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

    
?>