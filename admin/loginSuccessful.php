<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
      Login Page Demo
    </title>
    <link href="1b-login.css" rel="stylesheet">
  </head>
  <body>
     <?php 
     if (isset($failed)==false) { ?>
    <div id="bad-login">
      <script type="text/javascript">
      alert('login Successfully');
    </script>
    </div>
    <div>
      <center>
        <a href="updateValues.php">Update Efs here!</a>
      </center>
    </div>

    <form id="login-form" method="post" action="logout.php">
      <input value="Logout" class="btn btn-danger" type="submit" name="logout" onclick="LOGOUT()" />
    </form>
    <?php }
    elseif (isset($failed) && (empty($_SERVER["username"]))) { ?>
      <div>
        <p>Login First</p>
      </div>
     <?php header("Location : login.php");
    } ?>
    
  </body>
</html>