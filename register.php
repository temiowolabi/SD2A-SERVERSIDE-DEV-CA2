<?php
include('includes/header.php');
?>
<?php 
session_start(); 
include("database.php");
?>

<div class="auth-content">

    <form action="register.php" method="post">
      <h2 class="form-title">Register</h2>

      <div>
        <label>Username</label>
        <input type="text" name="username" id="username" value="" autocomplete="off" class="text-input" />
      </div>
      <div>
        <label>Email</label>
        <input type="text" name="email" id="username" email="" autocomplete="off" class="text-input"/>
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" id="password" value="" autocomplete="off" class="text-input"/>
      </div>
      <div>
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" id="passwordConf" value="" autocomplete="off" class="text-input"/>
      </div>
      <div>
        <button type="submit" name="register-btn" class="btn btn-big">Register</button>
      </div>
      <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
    </form>

  </div>

<?php
include('includes/footer.php');
?>