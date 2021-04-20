<?php include("../path.php"); ?>
<?php include("../includes/adminHeader.php"); 

$posts = getPosts(); 
adminOnly();
?>
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
        
    

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/includes/adminSidebar.php"); ?>


            <!-- Admin Content -->
            <div class="admin-content">

                <div class="content">

                    <h2 class="page-title">Dashboard</h2>

                    <?php include(ROOT_PATH . '/includes/messages.php'); ?>
                    <?php if (isset($_SESSION['id'])): ?>
                        <h1> Welcome Back, <?php echo $_SESSION['username']; ?>! </h1>
                        <?php endif; ?>
                    

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->

    </body>

</html>