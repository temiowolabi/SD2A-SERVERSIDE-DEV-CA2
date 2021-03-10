<?php
require('database.php');
$query = 'SELECT *
          FROM forumcategories
          ORDER BY category_id';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Add Record</h1>
        <form action="add_topic.php" method="post" enctype="multipart/form-data"
              id="add_topic_form">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['category_id']; ?>">
                    <?php echo $category['category_name']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
            <label>Topic:</label>
            <input type="input" name="name">
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Topic">
            <br>
        </form>
        <p><a href="extra.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>