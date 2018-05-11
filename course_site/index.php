<?php
    session_start();
    include_once 'php/db-inc.php';
  //  include_once 'php/log-in-inc.php';
  //  include_once 'php/sign-up-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: Course Website</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
      if(isset($_SESSION['logged_in']))
      {
        include_once 'user-header.php';
      }
      else
      {
        include_once 'general-header.php';
      }

    ?>

   <div class="cover">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url(img/bg1.jpg)"></div>
                <div class="carousel-item" style="background-image: url(img/bg2.jpg)"></div>
                <div class="carousel-item" style="background-image: url(img/bg.png)"></div>
            </div>
        </div>
        <h1 class="cover-text">COURSE WEBSITE</h1>
        <a href="./html/lessons.php"><button class="btn btn-outline-dark" type="button">Start Now</button></a>
    </div>

    <div class="container pt-10 mb-10" id="lnk-container">
        <div class="row">
            <div class="col-sm-9 text-justify">
                <h1>About the Site</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique ac diam in vestibulum. Vivamus vitae vestibulum ligula. Duis facilisis ut sapien at tincidunt. Nunc vel rhoncus quam, sit amet aliquam neque. Donec euismod justo eu euismod ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut enim quis dolor blandit laoreet ut sed dolor.
                </p>
                <p class="lead">
                    Nullam massa arcu, cursus sed dui vel, dignissim laoreet ligula. Donec vestibulum eu dui ut accumsan. Morbi et luctus orci. Suspendisse gravida a nisl eu accumsan. Sed accumsan ultricies arcu, tincidunt pretium arcu sollicitudin id. Morbi faucibus turpis id rhoncus consequat. Cras lobortis ac odio nec molestie. Donec in varius est. Nam nec porta ex. Donec pellentesque enim in ante consectetur tristique.
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col-sm-5 mr-10">
               <div class="nav-footer mb-3">
                    <a href="index.php">Home</a>
                    <a href="./html/lessons.php">Lessons</a>
                    <a href="#">Self-Assessment</a>
                    <a href="#">About Us</a>
               </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique ac diam in vestibulum. Vivamus vitae vestibulum ligula. Duis facilisis ut sapien at tincidunt. Nunc vel rhoncus quam, sit ametimg aliquam neque</p>
            </div>
            <div class="col-sm-5 r-0">
                <a href="index.php"><img src="img/webtech2.png" alt="logo"></a>
                <p class="text-copyright">Copyright &copy; 2018 Webtech. All rights reserved.</p>
                <div class="links mt-4">
                    <a href="#"><img src="img/github.svg" alt="Github Logo"></a>
                    <a href="http://www.oracle.com/technetwork/java/javaee/servlet/index.html"><img src="img/servlets.png" alt="Java Servlets Logo"></a>
                    <a href="http://php.net/manual/en/tutorial.php"><img src="img/php.svg" alt="PHP Logo"></a>
                    <a href="https://nodejs.org/api/"><img src="img/nodejs.png" alt="NodeJS Logo"></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>
