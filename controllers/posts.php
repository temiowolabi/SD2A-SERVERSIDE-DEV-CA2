<?php 

include(ROOT_PATH . "/database/db.php");
include(ROOT_PATH . "/validation/validatePost.php");

$table = 'posts';

$genres = selectAll('genres');
$posts = selectAll($table);


$errors = array();
$id = "";
$title = "";
$body = "";
$genre_id = "";

//GET - recieves parameters from url
if(isset($_GET['delete_id'])){
   $count = delete($table,  $_GET['delete_id']);
   $_SESSION['message'] = "Post Has Been Deleted";
   $_SESSION['type'] = "success";
   header("location: " . ROOT_URL . "/admin/posts/index.php");
   exit();
}


if(isset($_GET['id'])){
    $post = selectOne($table, ['id' => $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $genre_id = $post['genre_id'];
 
 }


    if (isset($_POST['add-post'])) {
        // adminOnly();
        $errors = validatePost($_POST);

        if(!empty($_FILES['image']['name'])){
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = ROOT_PATH . "./upload/" . $image_name; 
            
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
            if($result){
                $_POST['image'] = $image_name;
            }else{
                array_push($errors, "Failed to upload image.");
            }
        
        }else{
            array_push($errors, "Don't be boring, add an image!");
        }

        if(count($errors) == 0){

        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        //Removes html tags from database. HTML Tags makes it vulnerable to attacks. XSS

        $post_id = create($table, $_POST);
        $_SESSION['message'] = "New Post Has Been Added";
        $_SESSION['type'] = "success";
        header("location: " . ROOT_URL . "/admin/posts/index.php");
        exit();
    }else{
        $title = $_POST['title'];
        $body = $_POST['body'];
        $genre_id = $_POST['genre_id'];
    }
}

if(isset($_POST['update-post'])) {
    $errors = validatePost($_POST);

    if(!empty($_FILES['image']['name'])){
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "./upload/" . $image_name; 
        
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    
        if($result){
            $_POST['image'] = $image_name;
        }else{
            array_push($errors, "Failed to upload image.");
        }
    
    }else{
        array_push($errors, "Don't be boring, add an image!");
    }


    if(count($errors) == 0){
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];;
        $_POST['body'] = htmlentities($_POST['body']);
        //Removes html tags from database. HTML Tags makes it vulnerable to attacks. XSS

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post Has Been Updated";
        $_SESSION['type'] = "success";
        header("location: " . ROOT_URL . "/admin/posts/index.php");
    }else{
        $title = $_POST['title'];
        $body = $_POST['body'];
        $genre_id = $_POST['genre_id'];

    }
}


?>