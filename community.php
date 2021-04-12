  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="JS/main.js"></script>

<?php include("path.php") ?>
<?php include(ROOT_PATH . "/database/db.php"); ?>
<?php $posts = getPosts(); ?>


<?php

    require('database/database.php');

    $sql = 'SELECT * FROM posts';
    $query = $db->prepare($sql);
    $query->execute();
?>

<?php include('includes/header.php')?>

    <div class="page-wrapper">
    <div class="content clearfix">
<div class="main-content">
            <h1>Posts</h1>
        <?php foreach($posts as $post) : ?>
            <div class="post clearfix">
            <img src="upload/<?php echo $post['image']; ?>" class="post-image" />
      <div class="post-preview">
        <h2><?php echo $post['title']; ?></h2>
        <!-- add author -->
        <i class="fas fa-user-friends">Posted by <?php echo $post['username']; ?></i>
        <i class="far fa-calendar"> Posted on <?php echo $post['created_at']?></i><br><br>
        &nbsp;

      </div>
    </div>
                <a href="<?php echo ROOT_URL?>post.php?id=<?php echo $post['id'];?>" class="btn btn-primary">Read</a>
        <?php endforeach; ?>
        </div>
        </div>
        </div> 
            

<?php include('includes/footer.php')?>