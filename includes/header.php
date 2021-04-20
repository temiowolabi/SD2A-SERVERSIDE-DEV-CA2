
<!-- the head section -->
<head>
<title>My PHP CRUD App</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script src="JS/script.js"></script>
<script src="JS/validation.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="JS/main.js"></script>

</head>

<!-- the body section -->
<body>
<header>
<div class="nav-container">
    <nav class="navbar">
        <h1 id="navbar-logo">Book Kingdom</h1>
            <div class = "menu-toggle"  id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul class="nav-menu">
            <?php if(isset($_SESSION['admin'])): ?>
              <li class="nav-links"><a href="<?php echo ROOT_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
            <?php endif; ?>
        <?php
            if (isset($_SESSION['username'])) {
                echo '
                    <li><a href="index.php" class="nav-links">Home</a></li>
                    <li><a href="community.php" class="nav-links">Community</a></li>
                    <li><a href="logout.php" class="nav-links nav-links-btn">Logout</a></li>
                ';
            } else {
                echo '
                <li><a href="index.php" class="nav-links">Home</a></li>
                <li><a href="community.php" class="nav-links">Community</a></li>
                <li><a href="contact.php" class="nav-links">Contact</a></li>
                <li><a href="login.php" class="nav-links nav-links-btn">Login</a></li>
                <li><a href="register.php" class="nav-links nav-links-btn">Sign Up</a></li>
                ';
            }
        ?>
  
  <?php if(isset($_SESSION['username'])): ?>
                <li class="nav-links"> <i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?></li>
                <?php endif; ?>
    </ul>



    </nav>
</div>
</header>

</body>