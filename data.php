<?php

require('database.php');

$sth = $db->prepare("SELECT * from users");
$sth->execute();

$result = $sth->fetchAll();
echo "<pre>", print_r($result), "</pre>";

?>