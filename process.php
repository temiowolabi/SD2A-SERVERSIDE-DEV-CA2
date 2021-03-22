<?php 

session_start();

include_once("database/database.php");

if(isset($_POST['register']))
{
    $con = database::connect();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(insertDetails($con, $username, $email, $password));
    {
        // $_SESSION['username'] = $username;
        // header("Location: profile.php");

        echo "details inserted.";
    }
}

// if(isset($_POST['login']))
// {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     checkLogin($con,)
// }

function insertDetails($con, $username, $email, $password)
{
    $query = $con->prepare("
    
    INSERT INTO users (username,password,password)

    VALUES(:username, :email, :password)

    ");

    $query -> bindParam(":username", $username);
    $query -> bindParam(":email", $email);
    $query -> bindParam(":password", $password);

    return $query -> execute();
}

?>