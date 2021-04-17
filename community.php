  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="JS/main.js"></script>

<?php 
include("path.php");
include(ROOT_PATH . "/controllers/genres.php");
usersOnly();
adminOnly();

$posts = getPosts(); 
?>


<?php include('includes/header.php')?>

<div class="page-wrapper">
    <div class="content clearfix">
    <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <?php foreach ($posts as $post): ?>
          <div class="post clearfix">
            <img src="<?php echo ROOT_URL . './upload/' . $post['image']; ?>" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
              <i class="far fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              <p class="preview-text">
                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
              </p>
              <a href="post.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
            </div>
          </div>    
        <?php endforeach; ?>
        


      </div>
        </div>
        <a href="<?php echo ROOT_URL?>addPost.php" class="btn btn-submit">Add New Post</a>
        </div> 
            
 
                           
            

<?php include('includes/footer.php')?>