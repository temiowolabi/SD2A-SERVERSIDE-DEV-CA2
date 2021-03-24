<?php 

include(ROOT_PATH . "/database/db.php");

$table = 'genres';

//GLOBAL VARIABLES
$id = '';
$name ='';
$description = '';


$genres = selectAll($table);

if (isset($_POST['add-genre']))
{
   unset($_POST['add-genre']);
   $genre_id = create($table, $_POST);
   $_SESSION['message'] = 'New Genre Has Been Added';
   $_SESSION['type'] = 'success';
   header('location: ' . ROOT_URL . '/admin/genres/index.php');
   exit();
}

//Get request because ID is on URL
if (isset($_GET['id']))
{
   $id = $_GET['id'];
   $genre = selectOne($table, ['id' => $id]);
   $id = $genre['id'];
   $name = $genre['name'];
   $description = $genre['description'];
}

if (isset($_GET['del_id'])){
   $id = $_GET['del_id'];
   $count = delete($table, $id);
   $_SESSION['message'] = 'Genre Has Been Deleted';
   $_SESSION['type'] = 'success';
   header('location: ' . ROOT_URL . '/admin/genres/index.php');
   exit();
}


if (isset($_POST['update-genre'])) {

       $id = $_POST['id'];
       unset($_POST['update-genre'], $_POST['id']);
       $genre_id = update($table, $id, $_POST);
       $_SESSION['message'] = 'Genre Has Been Updated';
       $_SESSION['type'] = 'success';
       header('location: ' . ROOT_URL . '/admin/genres/index.php');
       exit();


}

?>