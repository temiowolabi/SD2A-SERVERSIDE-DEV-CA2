
<!-- the head section -->
<div class="container">
<?php
include('includes/header.php');
?>
        <h1>Add Record</h1>
        <div class="form-box">
        <form action="addpost.php" method="post" enctype="multipart/form-data"
              id="add_record_form">

              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-input" name="title" >
            </div>
            
            <div class="form-group">
                <label>Body</label>
                <input type="text" class="form-input" name="body" >
            </div>  
            
            <div class="form-group">
                <label>Writer</label>
                <input type="text" class="form-input" name="writer" >
            </div>  

            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-input" name="description" >
            </div>  

            <label>Image:</label>
            <input type="file" name="image" accept="image/*" />
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Record">
            <br>
        </form>
        </div>
        <p><a href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>