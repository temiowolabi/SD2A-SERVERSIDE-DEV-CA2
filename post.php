  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="JS/main.js"></script>
<?php include("path.php") ?>

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

<?php include('includes/header.php')?>
<div class="page-wrapper">
            <div class="content clearfix">
            <div class="main-content-wrapper">
            <div class="main-content single">
            <h1 class="post-title"><?php echo $post['title']; ?></h1>
            <img src="image_uploads/<?php echo $post['image']; ?>"  />

            <div class="post-content">
                <p><?php echo $post['description']; ?></p>
</div>
                <?php 
                    if(isset($_SESSION) && !empty($_SESSION['username'])) 
                    {
                        if ($post['author'] == $_SESSION['username']) {
                            echo '
                                <form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" class="button-right" method="POST">
                                <input type="hidden" name="delete_id" value="' . $post['id'] . '">
                                <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                                </form>
                                <a href="' . ROOT_URL . 'editpost.php?id=' . $post['id'] . '" class="btn btn-primary">Edit Post</a>
                            ';
                        }
                    } 
                ?>
                <a href="community.php" class="btn btn-primary">Back</a>
                </div>
                </div>
            </div>
                </div> 

                
<?php include('includes/footer.php')?>