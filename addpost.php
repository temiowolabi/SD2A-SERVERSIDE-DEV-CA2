<?php

    session_start();

    if (!isset($_SESSION['username'])) {
        header('Location: index.php');
        exit();
    }

// Get the product data
$title = filter_input(INPUT_POST, 'title');
$body = filter_input(INPUT_POST, 'body');
$writer = filter_input(INPUT_POST, 'writer');
$description = filter_input(INPUT_POST, 'description');
$author = filter_var($_SESSION['username'], FILTER_SANITIZE_STRING);

// Validate inputs
if ($title == null ||
    $body == null || $writer == null || $description == null || $author == null ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
    exit();
} else {

    /**************************** Image upload ****************************/

    error_reporting(~E_NOTICE); 

// avoid notice

    $imgFile = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    echo $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];

    if (empty($imgFile)) {
        $image = "";
    } else {
        $upload_dir = 'image_uploads/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        // rename uploading image
        $image = rand(1000, 1000000) . "." . $imgExt;
        // allow valid image file formats
        if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
            if ($imgSize < 5000000) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $upload_dir . $image)) {
                    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
                } else {
                    $error =  "Sorry, there was an error uploading your file.";
                    include('error.php');
                    exit();
                }
            } else {
                $error = "Sorry, your file is too large.";
                include('error.php');
                exit();
            }
        } else {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            include('error.php');
            exit();
        }
    }

    /************************** End Image upload **************************/
    
    require_once('database/database.php');

    // Add the product to the database 
    $query = "INSERT INTO posts
                 (title, body, author, writer, description, image)
              VALUES
                 (:title, :body, :author, :writer, :description, :image)";
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':body', $body);
    $statement->bindValue(':author', $author);
    $statement->bindValue(':writer', $writer);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':image', $image);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('community.php');
}