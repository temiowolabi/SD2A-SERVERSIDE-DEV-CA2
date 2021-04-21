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

<section class="news">
   
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
        <a href="post.php?id=<?php echo $post['id']; ?> " class="btn read-more">Read More</a> 
        </div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</section>

<section class="popularSection">
  <h1>Popular Right Now!</h1>
  <a href="https://www.easons.com/concrete-rose-angie-thomas-9781406384444"><img src="images/rose.jpg" alt="" class="news-image"></a>
  <a href="https://www.easons.com/aftershocks-nadia-owusu-9781529342871"><img src="images/shock.jpg" alt="" class="news-image"></a>
  <a href="https://www.easons.com/open-water-caleb-azumah-nelson-9780241448779"><img src="images/water.jpg" alt="" class="news-image"></a>


   <!-- Page Wrapper -->
   <div class="page-wrapper">


<!-- Content -->
<div class="content clearfix">

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


</div>
<!-- // Page Wrapper -->
</section>


</section>
            

<?php include('includes/footer.php')?>