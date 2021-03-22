<?php
    session_start();

    if (isset($_SESSION['username'])) {
        header('Location: index.php');
        exit();
    }

    include_once 'includes/header.php';
?>

<section class="auth-content">
    <form  action="includes/login.php" method="post">

    <h2 class="form-title">Login</h2>

    <div>
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" class="text-input" required>
</div>

<div>
        <label>Password</label>
        <input type="password" name="password" placeholder="password" class="text-input" required>
</div>

<div>

        <input type="submit" class="btn btn-big" value="Login" name="submit">
</div>
    </form>
</section>