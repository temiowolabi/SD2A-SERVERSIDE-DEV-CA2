<?php include('../../includes/adminHeader.php') ?>
<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/controllers/genres.php"); ?>

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

        <title>Admin Section - Update User</title>
    </head>

    <body>
        
    <div class="admin-wrapper">

    <!-- Sidebar -->

    <?php include(ROOT_PATH .'/includes/adminSideBar.php') ?>


 <!-- Admin Content -->
 <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Update User</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add User</h2>

                    <form action="create.html" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username"
                                class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password"
                                class="text-input">
                        </div>
                        <div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf"
                                class="text-input">
                        </div>
                        <div>
                            <label>Role</label>
                            <select name="role" class="text-input">
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-big">Update User</button>
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