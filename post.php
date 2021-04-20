  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<?php include("path.php");
include(ROOT_PATH . "/controllers/posts.php");
usersOnly();
 ?>
<?php

    require('database/database.php');

    if(isset($_POST['delete'])) {
        $delete_id = $_POST['delete_id'];

        $sql = 'DELETE FROM posts WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(['id' => $delete_id]);

        header('Location: ' . ROOT_URL . "");
    }

    $id = $_GET['id'];

    $sql = 'SELECT * FROM posts WHERE id = :id';
    $query = $db->prepare($sql);
    $query->execute(['id' => $id]);
    $post = $query->fetch();
?>

<body>
<?php include('includes/header.php')?>
<div class="page-wrapper">
            <div class="content clearfix">
            <div class="main-content-wrapper">
            <div class="main-content single">
            <h1 class="post-title"><?php echo $post['title']; ?></h1>
            <img src="upload/<?php echo $post['image']; ?>"  />

            <div class="post-content">
                <p><?php echo html_entity_decode ($post['body']); ?></p>
</div>

                
                </div>
                </div>
                
            </div>
            
            <a href="community.php" class="btn btn-primary">Back</a>
                </div> 



    

                
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="JS/main.js"></script>

</body>

                
<?php include('includes/footer.php')?>