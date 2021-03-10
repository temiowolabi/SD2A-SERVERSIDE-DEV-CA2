<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!-- the head section -->
<head>
<title>My PHP CRUD App</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script src="JS/script.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
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
        <?php
            if (isset($_SESSION['username'])) {
                echo '
                    <li><a href="index.php" class="nav-links">Home</a></li>
                    <li>
                        <form action="includes/logout.php" method="POST">
                            <button class="btn btn-logout" type="submit" name="submit">Logout</button>
                        </form>
                    </li>
                ';
            } else {
                echo '
                <li><a href="index.php" class="nav-links">Home</a></li>
                <li><a href="#" class="nav-links">My Books</a></li>
                <li><a href="#" class="nav-links">Browse</a></li>
                <li><a href="extra.php" class="nav-links">Community</a></li>
                <li><a href="login.php" class="nav-links nav-links-btn">Login</a></li>
                <li><a href="register.php" class="nav-links nav-links-btn">Sign Up</a></li>
                ';
            }
        ?>
    </ul>



    </nav>
</div>
</header>

</body>