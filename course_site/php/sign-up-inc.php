<?php
  session_start();
  $_SESSION['message'] = "";

  include_once 'db-inc.php';

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) || empty($_POST['gender']) || empty($_POST['email']) || empty($_POST['password']))
    {
      $_SESSION['message'] = "Oops, you might have missed filling up a part.";
      echo $_SESSION['message'];
      exit();
    }
    else
    {
      if($_POST['password'] == $_POST['confirm_password'])
      {
        $firstname = $mysqli->real_escape_string($_POST['firstname']);
        $lastname = $mysqli->real_escape_string($_POST['lastname']);
        $username = $mysqli->real_escape_string($_POST['username']);
        $gender = $mysqli->real_escape_string($_POST['gender']);
        $email = $mysqli->real_escape_string($_POST['email']);
        //$password = $mysqli->real_escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
        //$hashed_password = $mysqli->escape_string( md5( rand(0,1000) ) );
        $hashed_password = $mysqli->real_escape_string(password_hash($_POST['password'], PASSWORD_DEFAULT));

        $sql = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('$username', '$hashed_password', '$firstname', '$lastname', '$email');";
        $check_username =$mysqli->query("SELECT username FROM USERS WHERE username='".$username."'");

        if(mysqli_num_rows($check_username) == 0)
        {
          if ($mysqli->query($sql) === true)
          {
              $_SESSION['message'] = "Registration succesful! Added $firstname to the database!";
              header("location: ../index.php");
          }
          else
          {
            $_SESSION['message'] = 'User could not be added to the database!';
            echo $_SESSION['message'];
            exit();
          }

          $mysqli->close();
        }
        else
        {
          $_SESSION['message'] = "Username already exists";
          echo $_SESSION['message'];
          exit();
        }
      }
      else
      {
        $_SESSION['message'] = "Your passwords do not match";
        echo $_SESSION['message'];
        exit();
      }

    }

  }
