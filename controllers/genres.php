<?php

include(ROOT_PATH . "/database/db.php");
include(ROOT_PATH . "/errors/middleware.php");
include(ROOT_PATH . "/validation/validateGenre.php");

$table = 'genres';

$errors = array();
$id = '';
$name = '';
$description = '';

$genres = selectAll($table);


if (isset($_POST['add-genre'])) {
    adminOnly();
    $errors = validateGenre($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-genre']);
        $genre_id = create($table, $_POST);
        $_SESSION['message'] = 'Genre created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . ROOT_URL . '/admin/genres/index.php');
        exit(); 
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $genre = selectOne($table, ['id' => $id]);
    $id = $genre['id'];
    $name = $genre['name'];
    $description = $genre['description'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Genre deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . ROOT_URL . '/admin/genres/index.php');
    exit();
}


if (isset($_POST['update-genre'])) {
    adminOnly();
    $errors = validateGenre($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-genre'], $_POST['id']);
        $genre_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Genre updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . ROOT_URL . '/admin/genres/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

}
?>