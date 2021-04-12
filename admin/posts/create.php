<?php include('../../includes/adminHeader.php') ?>
<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/controllers/posts.php"); ?>

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

        <title>Admin Section - Add Post</title>
    </head>

    <body>
        
    <div class="admin-wrapper">

    <!-- Sidebar -->

    <?php include(ROOT_PATH .'/includes/adminSideBar.php') ?>


 <!-- Admin Content -->
 <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add Post</h2>

                <?php include(ROOT_PATH . '/errors/formErrors.php') ?>

                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>

                        <div>
                            <label>Body</label>
                            <textarea name="body" id="body"><?php echo $body ?></textarea>
                        </div>
<!-- 
                        <div>
                        <label>Writer</label>
                            <input type="text" name="writer" class="text-input">
                        </div>

                        <div> -->
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        
                        <div>
                            <label>Genre</label>
                            <select name="genre_id" class="text-input">
                            <option value=""></option>

                            <?php foreach ($genres as $key => $genre): ?>
                            <?php if(!empty($genre_id) && $genre_id == $genre['id']): ?>
                                <option selected value="<?php echo $genre['id'] ?>"><?php echo $genre['name'] ?></option>

                            <?php else: ?>
                                <option value="<?php echo $genre['id'] ?>"><?php echo $genre['name'] ?></option>
                            <?php endif; ?>

                            <?php endforeach; ?>

                            </select>
                        </div>
                        <div>
                            <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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