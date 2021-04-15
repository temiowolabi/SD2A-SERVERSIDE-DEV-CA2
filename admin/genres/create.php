<?php include('../../includes/adminHeader.php') ?>
<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/controllers/genres.php"); 
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
        <link rel="stylesheet" href="../../css/adminCSS.css">

        <title>Admin Section - Add Genre</title>
    </head>

    <body>
        
    <div class="admin-wrapper">

    <!-- Sidebar -->

    <?php include(ROOT_PATH .'/includes/adminSideBar.php') ?>


 <!-- Admin Content -->
 <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Genre</a>
                    <a href="index.php" class="btn btn-big">Manage Genres</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add Genre</h2>
                    <?php include(ROOT_PATH . "/errors/formErrors.php"); ?>

                    <form action="create.php" method="post">
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" id="body"></textarea>
                        </div>

                        <div>
                            <button type="submit" name="add-genre" value="<?php echo $description ?>" class="btn btn-big">Add Genre</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->


        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../JS/script.js"></script>

    </body>

</html>