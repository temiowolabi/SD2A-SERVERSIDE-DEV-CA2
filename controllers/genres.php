<?php 

include(ROOT_PATH . "/database/db.php");

if (isset($_POST['add-genre']))
{
   unset($_POST['add-genre']);
   $genre_id = create('genres', $_POST);
   $_SESSION['message'] = 'New Genre Has Been Added';
   $_SESSION['type'] = 'success';
   header('location: ' . ROOT_URL . '/admin/genres/index.php');
   exit();
}

?>