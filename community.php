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
// adminOnly();

$posts = getPosts(); 
?>


<?php include('includes/header.php')?>



<section class="latest-news-area" id="latest">
  <div class="container5">
    <div class="col-sm-12">
      <div class="section-title">
        <div class="section_subtitle">Blog</div>
        <h2>Recent <strong>Blogs</strong></h2>
      </div>
    </div>
  </div>
  <?php foreach ($posts as $post): ?>
  <br><br>
  <div class="row">
    <div class="news-active">
      <div class="col-md-4">
        <div class="latest-news-wrap">
          <div class="news-img">
          <img src="<?php echo ROOT_URL . './upload/' . $post['image']; ?>" alt="" class="img-responsive">
          <div class="deat">
            <span>
            <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
            </span>
          </div>
          </div>
          <div class="news-content">
          <i class="far fa-user"> Posted By: <?php echo $post['username']; ?></i>
          <p><?php echo html_entity_decode(substr($post['body'], 0, 300) . '...'); ?></p>
        <br>
        <a href="post.php?id=<?php echo $post['id']; ?>">Read More</a> 
        </div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</section>
 
                           
            

<?php include('includes/footer.php')?>