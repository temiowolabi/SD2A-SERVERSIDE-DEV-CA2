<?php
    session_start();

    if (isset($_SESSION['username'])) {
        header('Location: index.php');
        exit();
    }

    include_once 'includes/header.php';

    if (isset($_GET['signup'])) {
        $error = $_GET['signup'];
        switch ($error) {
            case 'invalid':
                echo '<div class="msg-container"><p class="msg error-msg">Sign Up Failed: Make sure you\'re email is valid and password is at least 6 characters.</p></div>';
                break;
            case 'empty':
                echo '<div class="msg-container"><p class="msg error-msg">Sign Up Failed: Please fill in all fields.</p></div>';
                break;
            case 'usertaken':
                echo '<div class="msg-container"><p class="msg error-msg">Sign Up Failed: User name or email is already taken.</p></div>';
                break;
            default:
            echo '<div class="msg-container"><p class="msg error-msg">Error</p></div>';
        }
    }
?>
<section class="auth-content">
    <form  action="includes/register.php" method="post">

    <h2 class="form-title">Register</h2>

    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username" class="text-input"size="25" onBlur="username_validation();" /><span id="name_err"></span>
</div>

<div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Email" class="text-input" size="50" onBlur="email_validation();"/><span id="email_err"></span>

<div>
        <label for="passid">Password</label>
        <input type="password" name="password" id="passid" placeholder="password" class="text-input" size="12" onBlur="passwd_validation();"/><span id="passwd_err"></span>
</div>

<div>

        <input type="submit" class="btn btn-big" value="Sign Up" name="submit">
</div>
    </form>
</section>
