<?php
require_once('database.php');

// Get category ID
if (!isset($category_id)) {
$category_id = filter_input(INPUT_GET, 'category_id', 
FILTER_VALIDATE_INT);
if ($category_id == NULL || $category_id == FALSE) {
$category_id = 1;
}
}

// Get name for current category
$queryCategory = "SELECT * FROM forumcategories
WHERE category_id = :category_id";
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();
$category_name = $category['category_name'];
$category_description = $category['category_description'];

// Get all categories
$queryAllCategories = 'SELECT * FROM forumcategories
ORDER BY category_id';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get topics for selected category
$queryTopics = "SELECT * FROM topics
WHERE category_id = :category_id
ORDER BY topic_id";
$statement3 = $db->prepare($queryTopics);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$topics = $statement3->fetchAll();
$statement3->closeCursor();
?>

<div class="container">
<?php
include('includes/header.php');
?>

<h1>Topics</h1>

<aside>
<!-- display a list of categories -->
<h2>Categories</h2>
<nav>
<ul>
<?php foreach ($categories as $category) : ?>
<li><a href=".?category_id=<?php echo $category['category_id']; ?>">
<?php echo $category['category_name']; ?>
</a>
</li>
<?php endforeach; ?>
</ul>
</nav>          
</aside>

<section>
<!-- display a table of topics -->
<h2><?php echo $category_name; ?></h2>
<table>
<tr>
<th>Topic</th>
<th>Posted By</th>
<th>Date Posted</th>
<th>Delete</th>
<th>Edit</th>
</tr>
<?php foreach ($topics as $topic) : ?>
<tr>
<td><?php echo $topic['topic_subject']; ?></td>
<td><?php echo $topic['username']; ?></td>
<td><?php echo $topic['topic_date']; ?></td>
<td><form action="delete_record.php" method="post"
id="delete_record_form">
<input type="hidden" name="topic_id"
value="<?php echo $topic['topic_id']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $topic['category_id']; ?>">
<input type="submit" value="Delete">
</form></td>
<td><form action="edit_record_form.php" method="post"
id="delete_record_form">
<input type="hidden" name="topic_id"
value="<?php echo $topic['topic_id']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $topic['category_id']; ?>">
<input type="submit" value="Edit">
</form></td>
<td><form action="edit_record_form.php" method="post"
id="delete_record_form">
<input type="hidden" name="topic_id"
value="<?php echo $topic['topic_id']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $topic['category_id']; ?>">
<input type="submit" value="Edit">
</form></td>
</tr>
<?php endforeach; ?>
</table>
<p><a href="add_topic_form.php">Add Topic</a></p>
<p><a href="category_list.php">Manage Categories</a></p>
</section>
<?php
include('includes/footer.php');
?>