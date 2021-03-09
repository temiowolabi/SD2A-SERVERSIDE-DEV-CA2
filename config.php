<?php 

class config{

    public static function connect()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname="ca2";

        try{
            $con = new PDO("mysql:host=$host;dbname=$dbname;password=$password");

            $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        }
        catch(PDOException $e)
        {
            $error_message = $e->getMessage();
            include('database_error.php');
            exit();
        }
    }
}

?>