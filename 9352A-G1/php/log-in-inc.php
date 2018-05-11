<!--
  used when the user is going to log in
-->

<?php
//  session_start();
  include_once 'db-inc.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $username = $mysqli->real_escape_string($_POST['username']);
  $results= $mysqli->query("SELECT * FROM users WHERE username='$username'");

  if($results->num_rows == 0)
  {
    $_SESSION['message'] = "User does not exist!";
    header("location: ../html/sign-up.php");
    exit();
  }
  else
  {
      $user = $results->fetch_assoc();
      session_start();


      if(password_verify($_POST['password'], $user['password']))
      {
        $_SESSION['username'] = $user['username'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];

        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        header("location: ../index.php");
        exit();
      }
      else
      {
        $_SESSION['message'] = "You have entered the wrong password. Try again.";
        echo $user['password'];
        echo $_POST['password'];
        header("location: ../html/login.php");
        exit();
      }
  }
}
