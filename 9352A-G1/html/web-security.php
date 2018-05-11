<?php
    session_start();
    include_once '../php/db-inc.php';
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
        <div class="bg-item-sm" style="background-image: url(../img/bg-servlet.png)"></div>
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>