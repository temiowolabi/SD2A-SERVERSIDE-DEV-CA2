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

    $sql = 'SELECT * FROM posts';
    $query = $db->prepare($sql);
    $query->execute();
    $posts = $query->fetchAll();

?>

<?php include('includes/header.php')?>

    <div class="page-wrapper">
    <div class="content clearfix">
<div class="main-content">
            <h1>Posts</h1>
        <?php foreach($posts as $post) : ?>
            <div class="post clearfix">
            <img src="image_uploads/<?php echo $post['image']; ?>" class="post-image" />
      <div class="post-preview">
        <h2><?php echo $post['title']; ?></h2>
        <!-- add author -->
        <i class="fas fa-user-friends">Posted by <?php echo $post['author']; ?></i>
        <i class="far fa-calendar"> Posted on <?php echo $post['created_at']?></i><br><br>
        <i class="fas fa-user-edit"> Author: <?php echo $post['writer']; ?></i><br>
        &nbsp;
        <i class="fas fa-paperclip">Decription: <?php echo $post['description']?></i>
        <!-- add decription -->
        <!-- <p class="preview-text">
        Sixteen-year-old Deka lives in fear and anticipation of the blood ceremony that will determine whether she will become a member of her village. Already different from everyone else because of her unnatural intuition, Deka prays for red blood so she can finally feel like she belongs.
        </p> -->
      </div>
    </div>
                <a href="<?php echo ROOT_URL?>post.php?id=<?php echo $post['id'];?>" class="btn btn-primary">Read</a>
        <?php endforeach; ?>
        </div>
        </div>
        </div> 
 
                            <a href="<?php echo ROOT_URL?>addpost_form.php" class="btn btn-submit">Add New Post</a>
            

<?php include('includes/footer.php')?>