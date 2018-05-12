<?php
    session_start();
    include_once '../php/db-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: PHP</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
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
        <div class="bg-item-sm" style="background-image: url(../img/bg-php.png)"></div>
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
                    <h1 class="text-left">PHP Hyptertext Preprocessor (PHP)</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">PHP</strong>, stands for <strong class="highlight-text">“PHP Hypertext Preprocessor”</strong>, is a very popular scripting language. PHP can easily create a dynamic content and can also read, write, open and delete a file on a server.  It can also collect data and could send cookies as well as receive it. PHP also modifies, adds, and deletes data stored in your database, encrypts data and is also used for user access control. </p>
                    <p class="lead">With the help of PHP, you are not only going to be limited to output HTML, hence, PHP can output even files in PDF, flash movies, and images.</p>
                    <p class="lead">PHP runs on Linux, Unix and Windows, and is compatible to servers such as Apache and IIS.</p>
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
                    <h2 class="text-left">PHP Sessions</h2>                    
                    <hr>
                    <ol class="list">
                        <li class="ctr list-type-circle-lg strong-li">Starting a PHP Session
                            <p class="lead">In PHP a session can be started by calling the <mark class="formatted-text">session_start()</mark> function which checks if a session has been started or not then and starts one. This function is recommended to be placed at the beginning of the page.</p>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Destroying a PHP Session
                            <p class="lead">To destroy a PHP Session use a function called <mark class="formatted-text">session_destroy()</mark></p>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">PHP Auto Session
                            <p class="lead">Set  the value of <mark class="formatted-text">session.auto_start</mark> to 1 in the php.ini file.</p>
                        </li>
                    </ol>
                </div>
                
                <div class="sub-container pt-5" id="php-sessions">
                    <h2 class="text-left">PHP to MySQL Connection</h2>                    
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
        <div class="col-xl-6 text-left">
            <p>Saint Louis University, Maryheights Campus</p>  
            <p>School of Computing and Information Sciences</p> 
            <p>Web Systems and Technologies</p> 
        </div>
        <div class="col-xl-6 text-right">    
            <a href="../index.php"><img src="../img/webtech2.png" alt="logo"></a>
            <p>Copyright &copy; 2018 Webtech. All rights reserved.</p>  
            </div>
        </div>
    </footer>
    
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>