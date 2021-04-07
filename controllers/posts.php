<?php 

include(ROOT_PATH . "/database/db.php");
include(ROOT_PATH . "/validation/validatePost.php");

$table = 'posts';

$genres = selectAll('genres');
$posts = selectAll($table);


$errors = array();
$title = "";
$body = "";
$genre_id = "";


    if (isset($_POST['add-post'])) {
        // adminOnly();
        $errors = validatePost($_POST);

        if(count($errors) == 0){

        unset($_POST['add-post'], $_POST['genre_id']);
        $_POST['user_id'] = 1;
        $_POST['body'] = htmlentities($_POST['body']);
        //Removes html tags from database. HTML Tags makes it vulnerable to attacks. XSS

        $post_id = create($table, $_POST);
        $_SESSION['message'] = "New Post Has Been Added";
        $_SESSION['type'] = "success";
        header("location: " . ROOT_URL . "/admin/posts/index.php");
    }else{
        $title = $_POST['title'];
        $body = $_POST['body'];
        $genre_id = $_POST['genre_id'];
    }
}


?>