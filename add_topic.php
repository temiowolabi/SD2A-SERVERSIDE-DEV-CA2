<?php

// Get the product data
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$topic_subject = filter_input(INPUT_POST, 'topic_subject');
$username = filter_input(INPUT_POST, 'topic_by');

// Validate inputs
if (
    $topic_subject == null || 
    $username == null ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
    exit();
} else {

    /**************************** Image upload ****************************/

    error_reporting(~E_NOTICE); 

// avoid notice

    require_once('database.php');

    // Add the product to the database 
    $query = "INSERT INTO posts
                 (topic_id, category_id, username, topic_subject, topic_date)
              VALUES
                 (:topic_id, :category_id, :username, :topic_subject, :topic_date)";
    $statement = $db->prepare($query);
    $statement->bindValue(':topic_id', $topic_id);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':topic_by', $topic_by);
    $statement->bindValue(':topic_date', $topic_date);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('extra.php');
}