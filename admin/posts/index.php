<?php include('../../includes/adminHeader.php') ?>
<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/controllers/posts.php"); 
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

        <title>Admin Section - Manage Posts</title>
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

                    <h2 class="page-title">Manage Posts</h2>

                    <?php include(ROOT_PATH . "/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $key => $post): ?> 

                        <tr>
                                <td><?php echo $key + 1?></td>
                                <td><?php echo $post['title']?></td>
                                <td>Temi</td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                            </tr>
                        <?php endforeach; ?>  
                        </tbody>
                    </table>

                </div>

            </div>
<!-- // Admin Content -->

</div>


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