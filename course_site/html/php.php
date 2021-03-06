<?php
    session_start();
    include_once '../php/db-inc.php';
  //  include_once 'php/log-in-inc.php';
  //  include_once 'php/sign-up-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: Java Servlets</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
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

    <div class="cover">
        <div class="bg-item" style="background-image: url(../img/bg1.jpg)"></div>
    </div>

    <div class="ml-3 mr-3 pt-5 mb-10">
        <div class="row">
            <div class="col-sm-3 pt-5 ml-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link bg-active" href="#">PHP</a>
                        <div class="subnav">
                            <ul class="subnav-menu">
                                <li class="nav-item">
                                    <a href="#servlet-overview">PHP: Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#php-cookies">PHP Cookies</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#php-sessions">PHP Sessions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#php-mysql">PHP to MySQL Connection</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-sm-8 text-justify ml-2">
                <div class="sub-container pt-5" id="servlet-overview">
                    <h1>PHP Hyptertext Preprocessor (PHP)</h1>
                    <hr>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique ac diam in vestibulum. Vivamus vitae vestibulum ligula. Duis facilisis ut sapien at tincidunt. Nunc vel rhoncus quam, sit ametimg aliquam neque</p>
                </div>

                <div class="sub-container pt-5" id="php-cookies">
                    <h2>PHP Cookies</h2>
                    <hr>
                    <p class="lead">To set cookies in PHP use the function <mark class="formatted-text">setcookie()</mark> with the following parameters:</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td class="strong">Name</td>
                                    <td>sets the name of the cookie</td>
                                </tr>
                                <tr>
                                    <td class="strong">Value</td>
                                    <td>the value of the cookie which is what you want to store</td>
                                </tr>
                                <tr>
                                    <td class="strong">Expiry</td>
                                    <td>when the cookie will expire. When this parameter is not set it will expire when the browser is closed</td>
                                </tr>
                                <tr>
                                    <td class="strong">Path</td>
                                    <td>the directory where the cookie will be saves</td>
                                </tr>
                                <tr>
                                    <td class="strong">Domain</td>
                                    <td>domain name where the cookie is valid</td>
                                </tr>
                                <tr>
                                    <td class="strong">Security</td>
                                    <td>1 for the cookie to be sent via HTTPS and 0 for HTTP</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="sub-container pt-5" id="php-sessions">
                    <h2>PHP Sessions</h2>
                    <hr>
                    <ol class="list">
                        <li class="list-type-circle-lg strong-li">Starting a PHP Session
                            <p class="lead">In PHP a session can be started by calling the <mark class="formatted-text">session_start()</mark> function which checks if a session has been started or not then and starts one. This function is recommended to be placed at the beginning of the page.</p>
                        </li>
                        <li class="list-type-circle-lg strong-li">Destroying a PHP Session
                            <p class="lead">To destroy a PHP Session use a function called <mark class="formatted-text">session_destroy()</mark></p>
                        </li>
                        <li class="list-type-circle-lg strong-li">PHP Auto Session
                            <p class="lead">Set  the value of <mark class="formatted-text">session.auto_start</mark> to 1 in the php.ini file.</p>
                        </li>
                    </ol>
                </div>

                <div class="sub-container pt-5" id="php-sessions">
                    <h2>PHP to MySQL Connection</h2>
                    <hr>
<pre class="sample-code">
    $connectdb = new PDO("mysql:host=SERVERNAME;dbname=myDB", USERNAME, PASSWORD);
</pre>
               </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col-sm-5 mr-10">
               <div class="nav-footer mb-3">
                    <a href="../index.php">Home</a>
                    <a href="lessons.php">Lessons</a>
                    <a href="#">Self-Assessment</a>
                    <a href="#">About Us</a>
               </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique ac diam in vestibulum. Vivamus vitae vestibulum ligula. Duis facilisis ut sapien at tincidunt. Nunc vel rhoncus quam, sit ametimg aliquam neque</p>
            </div>
            <div class="col-sm-5 r-0">
                <a href="../index.php"><img src="../img/webtech2.png" alt="logo"></a>
                <p class="text-copyright">Copyright &copy; 2018 Webtech. All rights reserved.</p>
                <div class="links mt-4">
                    <a href="#"><img src="../img/github.svg" alt="Github Logo"></a>
                    <a href="http://www.oracle.com/technetwork/java/javaee/servlet/index.html"><img src="../img/servlets.png" alt="Java Servlets Logo"></a>
                    <a href="http://php.net/manual/en/tutorial.php"><img src="../img/php.svg" alt="PHP Logo"></a>
                    <a href="https://nodejs.org/api/"><img src="../img/nodejs.png" alt="NodeJS Logo"></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>

</body>
</html>
