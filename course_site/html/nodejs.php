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
                        <a class="nav-link bg-active" href="#">Node.js</a>
                        <div class="subnav">
                            <ul class="subnav-menu">
                                <li class="nav-item">
                                    <a href="#nodejs-overview">Node.js: Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#nodejs-callback">Callback Concepts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#nodejs-buffers">Buffers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#nodejs-stream">Stream</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#nodejs-express">Express Framework</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-sm-8 text-justify ml-2">
                <div class="sub-container pt-5" id="nodejs-overview">
                    <h1>Node.js</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Node.js</strong> an open source and was developed by Ryan Dahl. Node.js has different software packages and it’s a runtime environment for developing server-side and networking applications. The Node.js applications are written in JavaScript, and this can run within the Node.js runtime on OS X, Microsoft Windows, and Linux. In addition, Node.js is a server-side platform built on a browser, and this browser is on Google Chrome’s JavaScript Engine.</p>
                    <div class="subcontainter-sub pt-3 ml-3">
                        <h3>Where you can use the Node.js?</h3>
                        <ol class="list">
                            <li class="list-type-circle-sm strong-li">I/O bound Applications
                                <p class="lead">Improves the performance of I/O bound computers through its memory and storage which it is being transferred by a fast speed.</p>
                            </li>
                            <li class="list-type-circle-sm strong-li">Data Streaming Applications
                                <p class="lead">Is a stream that transfers data at a steady high-speed at one place to another to support such applications as high-definition television.</p>
                            </li>
                            <li class="list-type-circle-sm strong-li">Data Intensive Real-time Applications (DIRT)
                                <p class="lead">This application uses a data parallel computing to approach a process of a large volumes of data.</p>
                            </li>
                            <li class="list-type-circle-sm strong-li">JSON APIs based Applications
                                <p class="lead">It portrays how clients should ask permission or edit data from a server and how will the server respond to the requests.</p>
                            </li>
                            <li class="list-type-circle-sm strong-li">Single Page Applications
                                <p class="lead">Is a Web apps that fits a single page and through that page, the user will interact with the apps.</p>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="sub-container pt-5" id="nodejs-callback">
                    <h1>Callback Concepts</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Callback</strong> is an event which is called after the completion of a particular task. In addition, Callback is equal to a function but it moves asynchronously.</p>
                    <div class="subcontainter-sub pt-3 ml-3">
                        <h3>Blocking and Non-Blocking Calls</h3>
                        <p class="lead">Explanation of the concept of blocking and non-blocking calls.</p>
                        <ul class="list m-0">
                            <li class="m-1">shows that the program blocks until it reads the file and then only it proceeds to end the program.</li>
                            <li class="m-1">shows that the program does not wait for file reading and proceeds to print "Program Ended" and at the same time, the program without blocking continues reading the file.</li>
                        </ul>
                    </div>
                </div>

                <div class="sub-container pt-5" id="nodejs-buffers">
                    <h1>Buffers</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Buffer class</strong> is a global class that can be accessed in an application and its not necessary to import it using any keywords.</p>
                    <div class="subcontainer-sub pt-3 ml-3">
                        <h3>Class Methods</h3>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <td class="strong">Method</td>
                                    <td class="strong">Description</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><mark class="formatted-text">Buffer.isEncoding(encoding)</mark></td>
                                        <td>returns true if the encoding is a valid encoding argument, false otherwise</td>
                                    </tr>
                                    <tr>
                                        <td><mark class="formatted-text">Buffer.isBuffer(obj)</mark></td>
                                        <td>sees if the obj is a buffer</td>
                                    </tr>
                                    <tr>
                                        <td><mark class="formatted-text">Buffer.byteLength(string[, encoding])</mark></td>
                                        <td>provide the actual byte length of a string</td>
                                    </tr>
                                    <tr>
                                        <td><mark class="formatted-text">Buffer.concat(list[, totalLength])</mark></td>
                                        <td>gives back a buffer which is the result of linking together all the buffers</td>
                                    </tr>
                                    <tr>
                                        <td><mark class="formatted-text">Buffer.compare(buf1, buf2)</mark></td>
                                        <td>useful for sorting an array of buffers</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="sub-container pt-5" id="nodejs-streams">
                    <h1>Streams</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Stream</strong> is an abstract interface for working with data from a source or it can also write data to a specific destination in a streaming data.</p>
                    <div class="subcontainer-sub pt-3 ml-3">
                        <h3>Four Types of Streams:</h3>
                        <ol class="list">
                            <li class="list-type-circle-sm m1">
                                <strong class="strong-li">Readable</strong> &rArr; used for read operation.
                            </li>
                            <li class="list-type-circle-sm m1">
                                <strong class="strong-li">Writable </strong> &rArr; used for write operation.
                            </li>
                            <li class="list-type-circle-sm m1">
                                <strong class="strong-li">Duplex </strong> &rArr; used for both read write operation.
                            </li>
                            <li class="list-type-circle-sm m1">
                                <strong class="strong-li">Transform </strong> &rArr; outputs the computed value based on input.
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="sub-container pt-5" id="nodejs-express">
                    <h1>Express Framework</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Express </strong>is a project of the Node.js. Express is a minimal and flexible Node.js web application framework that provides a robust set of features to develop web and mobile applications.</p>
                    <div class="subcontainter-sub pt-3 ml-3">
                        <h3>Core Features of Express</h3>
                        <ul class="list">
                            <li class="m-1">Allows to set up middlewares to respond to HTTP Requests.</li>
                            <li class="m-1">Defines a routing table which is used to perform different actions based on HTTP Method and URL.</li>
                            <li class="m-1">Allows to dynamically render HTML Pages based on passing arguments to templates.</li>
                        </ul>
                    </div>
                    <div class="subcontainter-sub pt-3 ml-3">
                        <h3>Request & Response</h3>
                        <p class="lead">Express application uses a callback function whose parameters are request and response objects.</p>
                        <ul class="list">
                            <li class="m-1 strong-li">Request Object
                                <p class="lead">The request object represents the HTTP request and has properties for the request query string, parameters, body, HTTP headers, and so on.</p>
                            </li>
                            <li class="m-1 strong-li">Response Object
                                <p class="lead">The response object represents the HTTP response that an Express app sends when it gets an HTTP request.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col-sm-5 mr-10">
               <div class="nav-footer mb-3">
                    <a href="../index.html">Home</a>
                    <a href="lessons.html">Lessons</a>
                    <a href="#">Self-Assessment</a>
                    <a href="#">About Us</a>
               </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique ac diam in vestibulum. Vivamus vitae vestibulum ligula. Duis facilisis ut sapien at tincidunt. Nunc vel rhoncus quam, sit ametimg aliquam neque</p>
            </div>
            <div class="col-sm-5 r-0">
                <a href="../index.html"><img src="../img/webtech2.png" alt="logo"></a>
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
