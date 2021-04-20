  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="JS/main.js"></script>



<?php include("path.php") ?>
<?php include('includes/header.php');
include(ROOT_PATH . "/controllers/genres.php");
usersOnly();
?>

<body>
  <!-- Facebook Page Plugin SDK -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1">
  </script>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
            <div class="content clearfix">
            <div class="main-content-wrapper">
            <div class="main-content single">
            <h1 class="post-title">The Book Thief</h1>
            <img src="images/book_thief.jpg" alt="" />

            <div class="post-content">
                <p>It is 1939. Nazi Germany. The country is holding its breath. Death has never been busier, and will be busier still.

By her brother's graveside, Liesel's life is changed when she picks up a single object, partially hidden in the snow. It is The Gravedigger's Handbook, left behind there by accident, and it is her first act of book thievery. So begins a love affair with books and words, as Liesel, with the help of her accordian-playing foster father, learns to read. Soon she is stealing books from Nazi book-burnings, the mayor's wife's library, wherever there are books to be found.

But these are dangerous times. When Liesel's foster family hides a Jew in their basement, Liesel's world is both opened up, and closed down.

In superbly crafted writing that burns with intensity, award-winning author Markus Zusak has given us one of the most enduring stories of our time.</p>
</div>

                
                </div>
                </div>
                
            </div>
            
            <a href="community.php" class="btn btn-primary">Back</a>
                </div> 
  <!-- // Page Wrapper -->

  <!-- footer -->


</body>

<?php
include('includes/footer.php');
?>