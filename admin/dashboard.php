<<<<<<< HEAD
<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/controllers/posts.php"); 
$posts = getPosts(); 
adminOnly();
?>
=======
<?php include('../includes/adminHeader.php') ?>
<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/controllers/posts.php"); ?>

>>>>>>> origin/Contact
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../css/adminCSS.css">

        <title>Admin Section - Dashboard</title>
    </head>

    <body>
        
<<<<<<< HEAD
    <?php include(ROOT_PATH . "/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/includes/adminSidebar.php"); ?>


            <!-- Admin Content -->
            <div class="admin-content">
=======
    <div class="admin-wrapper">

    <!-- Sidebar -->

    <?php include(ROOT_PATH .'/includes/adminSideBar.php') ?>


 <!-- Admin Content -->
 <div class="admin-content">
              
>>>>>>> origin/Contact

                <div class="content">

                    <h2 class="page-title">Dashboard</h2>

<<<<<<< HEAD
                    <?php include(ROOT_PATH . '/includes/messages.php'); ?>
                    <?php if (isset($_SESSION['id'])): ?>
                        <h1> Welcome Back, <?php echo $_SESSION['username']; ?>! </h1>
                        <?php endif; ?>
                    

=======
                <?php include(ROOT_PATH . '/includes/messages.php'); ?>

                
//add user dashboard
>>>>>>> origin/Contact
                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->


<<<<<<< HEAD

=======
>>>>>>> origin/Contact
        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
<<<<<<< HEAD
        <script src="../JS/scripts.js"></script>
=======
        <script src="../JS/script.js"></script>
>>>>>>> origin/Contact

    </body>

</html>