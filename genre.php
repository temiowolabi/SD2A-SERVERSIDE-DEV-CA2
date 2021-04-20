<?php 
include("path.php");
include(ROOT_PATH . "/controllers/genres.php");

$posts = array();
$postsTitle = "Recent Posts";

if(isset($_GET['t_id'])){
  $posts = getPostsByGenreId($_GET['t_id']);
  $postsTitle = "Posts under '" . $_GET['name'] . "'"; 
}
else{
  $posts = getPosts();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>


  <title>Home</title>
</head>

<body>

  <?php include(ROOT_PATH . "/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/includes/messages.php"); ?>



  <!-- Page Wrapper -->
  <div class="page-wrapper">


    <!-- Content -->
    <div class="content clearfix">
<!-- Main Content -->
<div class="main-content">
        <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

        <?php foreach ($posts as $post): ?>
          <div class="post clearfix">
            <img src="<?php echo ROOT_URL . './upload/' . $post['image']; ?>" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
              <i class="far fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              <p class="preview-text">
                <?php echo html_entity_decode(substr($post['body'], 0, 300) . '...'); ?>
              </p>
              <a href="post.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
            </div>
          </div>    
        <?php endforeach; ?>
        


      </div>
      <!-- // Main Content -->


      <div class="sidebar">

        <!-- <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div> -->


        <div class="section topics">
          <h2 class="section-title">Genres</h2>
          <ul>
          <?php foreach ($genres as $key => $genre): ?>
              <li><a href="<?php echo ROOT_URL . '/genre.php?t_id=' . $genre['id'] . '&name=' . $genre['name'] ?>"><?php echo $genre['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->
    <div class="row">
            <div class="col-md-10 col-lg-12">
                <div class="clearfix">
                    <a href="community.php">
                        <button class="btn btn-primary float-right" type="button">Older Posts&nbsp;⇒</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

  </div>
  <!-- // Page Wrapper -->



  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="JS/script.js"></script>

</body>

<!-- // footer -->
<?php
include('includes/footer.php');
?>