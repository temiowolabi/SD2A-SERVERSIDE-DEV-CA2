
<?php include("path.php") ?>
<?php include('includes/header.php') ?>
<?php
            if (isset($_GET['signup'])) {
                $msg = $_GET['signup'];
                if ($msg == 'success') {
                    echo '<div class="msg-container"><p class="msg confirm-msg">You\'ve successfully signed up.</p></div>';
                }
            } else if (isset($_GET['login'])) {
                $msg = $_GET['login'];
                if ($msg == 'success') {
                    echo '<div class="msg-container"><p class="msg confirm-msg">You\'ve successfully logged in.</p></div>';
                } else if ($msg = 'error') {
                    echo '<div class="msg-container"><p class="msg error-msg">Incorrect username or password. Please Try Again.</p></div>';
                }
            }
            
        ?>

<body>
     <!-- Page Wrapper -->
  <div class="page-wrapper">

<!-- Post Slider -->
<div class="post-slider">
  <h1 class="slider-title">Best Books Ever</h1>
  <i class="fas fa-chevron-left prev"></i>
  <i class="fas fa-chevron-right next"></i>

  <div class="post-wrapper">

    <div class="post">
      <img src="images/pride_prejudice.jpg" alt="" class="slider-image">
      <div class="post-info">
        <h4><a href="<?php echo ROOT_URL . '/pride_prejudice.php' ?>">Pride & Prejudice</a></h4>
        <i class="fas fa-user-edit"> Jane AUSTEN</i>
        &nbsp;
        <i class="far fa-calendar"> Mar 8, 2019</i>
      </div>
    </div>

    <div class="post">
      <img src="images/love_resolution.jpg" alt="" class="slider-image">
      <div class="post-info">
      <h4><a href="single.html">Love Is a Revolution</a></h4>
        <i class="fas fa-user-edit"> Renée WATSON</i>
        &nbsp;
        <i class="far fa-calendar"> February 2nd 2021</i>
      </div>
    </div>

    <div class="post">
      <img src="images/memoryMan.jfif" alt="" class="slider-image">
      <div class="post-info">
      <h4><a href="single.html">Memory Man</a></h4>
        <i class="fas fa-user-edit"> David BALDACCI</i>
        &nbsp;
        <i class="far fa-calendar"> April 21st 2015</i>
      </div>
    </div>

    <div class="post">
      <img src="images/childrenOfChicago.jpg" alt="" class="slider-image">
      <div class="post-info">
      <h4><a href="single.html">Children Of Chicago</a></h4>
        <i class="fas fa-user-edit"> Cynthia PELAYO</i>
        &nbsp;
        <i class="far fa-calendar"> February 9th 2021</i>
      </div>
    </div>

    <div class="post">
      <img src="images/queenOfNothin.jpg" alt="" class="slider-image">
      <div class="post-info">
      <h4><a href="single.html">The Queen of Nothing</a></h4>
        <i class="fas fa-user-edit"> Holly BLACK</i>
        &nbsp;
        <i class="far fa-calendar"> November 19th 2019</i>
      </div>
    </div>


  </div>

</div>
<!-- // Post Slider -->

<!-- Content -->
<div class="content clearfix">

  <!-- Main Content -->
  <div class="main-content">
    <h1 class="recent-post-title">Recommended Books</h1>

    <div class="post clearfix">
      <img src="images/book_thief.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h2><a href="single.hmtl">The Book Thief</a></h2>
        <i class="fas fa-user-edit"> Markus Zusak</i>
        &nbsp;
        <i class="far fa-calendar"> September 1st 2005</i>
        <p class="preview-text">
        It is 1939. Nazi Germany. The country is holding its breath. Death has never been busier, and will be busier still.

By her brother's graveside, Liesel's life is changed when she picks up a single object, partially hidden in the snow. 

<span id="dots">....</span> 
<span id="more">
It is The Gravedigger's Handbook, left behind there by accident, and it is her first act of book thievery. 

</span>
        </p>
        <p  onclick="myFunction()" class="btn read-more">Read More</p>
      </div>
    </div>

    <div class="post clearfix">
      <img src="images/DaVinciCode.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h2><a href="single.hmtl">The Da Vinci Code</a></h2>
        <i class="fas fa-user-edit"> Dan Brown</i>
        &nbsp;
        <i class="far fa-calendar"> March 18th 2003</i>
        <p class="preview-text">
        While in Paris, Harvard symbologist Robert Langdon is awakened by a phone call in the dead of the night. The elderly curator of the Louvre has been murdered inside the museum, 
        his body covered in baffling symbols. As Langdon and gifted French cryptologist Sophie Neveu sort through the bizarre riddles, they are stunned to discover nothing.
        </p>
      </div>
    </div>
    <div class="post clearfix">
      <img src="images/alchemist.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h2><a href="single.hmtl">The Alchemist</a></h2>
        <i class="fas fa-user-edit"> Paulo Coelho</i>
        &nbsp;
        <i class="far fa-calendar"> first published 1988</i>
        <p class="preview-text">
        Paulo Coelho's enchanting novel has inspired a devoted following around the world. This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. 
        </p>
      </div>
    </div>
    <div class="post clearfix">
      <img src="images/gilded.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h2><a href="single.hmtl">The Gilded Ones</a></h2>
        <i class="fas fa-user-edit"> Namina Forna</i>
        &nbsp;
        <i class="far fa-calendar"> February 9th 2021</i>
        <p class="preview-text">
        Sixteen-year-old Deka lives in fear and anticipation of the blood ceremony that will determine whether she will become a member of her village. Already different from everyone else because of her unnatural intuition, Deka prays for red blood so she can finally feel like she belongs.
        </p>
      </div>
    </div>

  </div>
  <!-- // Main Content -->


</div>
<!-- // Content -->

</div>
<!-- // Page Wrapper -->


<!-- // footer -->

<script>
    const myFunction=()=>{
    let dots= document.getElementById("dots");
    let moreText = document.getElementById("more");
    let btnText= document.getElementsByClassName("read-more");

    if (dots.style.display === "none") {
        dots.style.display="inline";
        btnText.innerHTML="Read More";
        moreText.style.display="none";
    } else {
        dots.style.display="none"      ;
        btnText.innerHTML="Read Less";
        moreText.style.display="inline";
    }
}
</script>

</body>

<!-- // footer -->
<?php
include('includes/footer.php');
?>