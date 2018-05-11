<?php
    session_start();
    include_once '../php/db-inc.php';
 ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script src="../js/jquery.slim.min.js"></script>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <title></title>
  <style type="text/css">
    .bg-dark {
        background: linear-gradient(to left, #2a7b9b, #00baad) !important;
        box-shadow: 0.5rem 0.1rem 0.5rem 0.1rem rgba(108, 117, 125, 0.5);
    }
    nav {
      position: static !important;
    }
  </style>
</head>
<body>
  <?php
      if(isset($_SESSION['logged_in']))
      {
        include_once '../user-header.php';
      }
      else
      {
        include_once '../general-header.php';
      }
  ?>

        <h2> QUIZ </h2>
        <div class="quiz-form">
            <form method="post" action="../php/nodechecker.php" class="quiz">
                <ol id="quiz-list"></ol>

                <button type="submit">Submit</button>
            </form>
        </div>


        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/jquery.slim.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/nodequiz.js"></script>
    </body>
</html>
