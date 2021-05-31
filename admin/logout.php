<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
function LOGOUT()
{
  if (isset($_POST['logout'])) { unset($_SESSION['username']); }

  // (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
  }
}
?>

<script type="text/javascript">
	alert('logout Successful');
</script>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<a href="login.php">Login Again</a>
	</center>
</body>
</html>