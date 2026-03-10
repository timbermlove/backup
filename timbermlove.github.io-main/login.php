<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Username: <br><input type="text" name="user"><br>
  Password:  <br><input type="text" name="pass"><br>
  <br><input type="submit"><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = htmlspecialchars($_POST['user']);
  if (empty($user)) {
    echo "Username is empty";
  } else {
    echo $user;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pass = htmlspecialchars($_POST['pass']);
  if (empty($pass)) {
    echo "Password is empty";
  } else {
    echo $pass;
  }
}
?>

</body>
</html>
