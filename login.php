  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="JS/main.js"></script>

<?php
include('includes/header.php');
?>

<body>

  <div class="auth-content">

    <form action="login.html" method="post">
      <h2 class="form-title">Login</h2>

      <div>
        <label>Username</label>
        <input type="text" name="username" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" class="text-input">
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn btn-big">Login</button>
      </div>
      <p>Or <a href="register.html">Sign Up</a></p>
    </form>

  </div>

</body>

<?php
include('includes/footer.php');
?>