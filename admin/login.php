<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<link rel="shortcut icon" type="image/png" href="images/footprint.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form style="width:50%;" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
        </div>
        <div class="">
            <input type="submit" name="submit" value="Login" class="btn btn-success"/>
        </div>
    </form>
    </div>


    <?php
// (A) START SESSION 
session_start();

// (B) HANDLE LOGIN
if (isset($_POST['submit'])) {
  // (B1) USERS & PASSWORDS - SET YOUR OWN !

  $users = [
    "joe" => "123456",
    "jon" => "654321",
    "joy" => "987654"
  ];

  // (B2) CHECK & VERIFY
  if (isset($users[$_POST['username']])) {
    if ($users[$_POST['username']] == $_POST['password']) {
      $_SESSION['username'] = $_POST['username'];
    }
  }

  // (B3) FAILED LOGIN FLAG
  if (!isset($_SESSION['username'])) { $failed = true; }
}

// (C) REDIRECT USER TO HOME PAGE IF SIGNED IN
if (isset($_SESSION['username'])) {
  header("Location: loginSuccessful.php"); // SET YOUR OWN HOME PAGE!
  exit();
}?>
</body>
</html>