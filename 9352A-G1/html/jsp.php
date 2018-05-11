<?php
    session_start();
    include_once '../php/db-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: JSP</title>
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
                        <a class="nav-link bg-active" href="#">Java Server Pages</a>
                        <div class="subnav">
                            <ul class="subnav-menu">
                                <li class="nav-item">
                                    <a href="#jsp-overview">JSP: Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#jsp-tag">JSP Tags</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#jsp-declaration">JSP Declaration</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#jsp-expression">JSP Expressions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#jsp-comment">JSP Comments</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="col-sm-8 text-justify ml-2">
                <div class="sub-container pt-5" id="jsp-overview">
                    <h1 class="text-left">Java Server Pages (JSP)</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Java Server Pages (JSP)</strong> is a technology that was based on a famous language, Java, and enables every development of websites which are dynamic and not static. Sun Microsystems was the one who created JSP for the reason to allow development which is a server-side. JavaServer files together with HTML files which includes tags that has the java source code that will provide dynamic content.</p>
                    <p class="lead">JSP is easy and gives web developers to create websites and applications in a faster way. It come from or is based from JAVA, a language that is object-oriented. IT also offers a wide platform for the development of a web.</p>
                </div>
                
                <div class="sub-container pt-5" id="jsp-tag">
                    <h2 class="text-left">JSP Tags</h2>
                    <hr>
                    <ol class="list">
                       <li class="list-type-circle-sm strong-li">Declaration Tag (
                            <mark class="formatted-text strong">&lt;%! %&gt;</mark> )
                            <p class="lead">Allows a developer in declaring variables or even methods.</p>
                        </li>
                        <li class="list-type-circle-sm strong-li">Expression Tag (
                            <mark class="formatted-text strong">&lt;%= %&gt;</mark> )
                            <p class="lead">Allows a developer to embed any JAVA Expression.</p>
                        </li>  
                        <li class="list-type-circle-sm strong-li">Directive Tag (
                            <mark class="formatted-text strong">&lt;%@directive... %&gt;</mark> )
                            <p class="lead">A JSP directive gives special information about the page to the JSP Engine.</p>
                        </li>
                        <li class="list-type-circle-sm strong-li">Scriplet Tag (
                            <mark class="formatted-text strong">&lt;% ... %&gt;</mark> )
                            <p class="lead">This tag can access any variable that has been declared.</p>
                        </li>
                        <li class="list-type-circle-sm strong-li">Action Tag
                            <p class="lead"><strong class="highlight-text">Action tag</strong> enables the use of server side JavaBeans, can transfer control between pages, and is a browser independent.</p>
                        </li>            
                    </ol>
                </div>
                
                <div class="sub-container pt-5" id="jsp-declaration">
                    <h2 class="text-left">JSP Declarations</h2>
                    <hr>
                    <p class="lead">As the word itself declarations Is the one declaring one or more variables or methods which you can be used to cod in Java. First is you will declare a variable or methods for you to use it in the JSP file.</p>
                    <p class="lead">Sample code for JSP Declation:</p>
<pre class="sample-code">
    &lt;%! int d = 0; %&gt;
    &lt;%! int x, y, z; %&gt; 
</pre>
                </div>
                
                <div class="sub-container pt-5" id="jsp-expression">
                    <h2 class="text-left">JSP Expressions</h2>
                    <hr>
                    <p class="lead">It was an element which has scripting language that is being monitored, that will be transformed into a string and where the expression will show in JSP file.</p>
                    <p class="lead">Example that shows a JSP Expression:</p>
<pre class="sample-code">
    &lt;html&gt; 
        &lt;head&gt;&lt;title&gt;Webtech LEc&lt;/title&gt;&lt;/head&gt;     
        &lt;body&gt;
            &lt;p&gt;Date: &lt;%= (new java.util.Date()).toLocaleString()%&gt;&lt;/p&gt;    
        &lt;/body&gt;
    &lt;/html&gt;
</pre>
                </div>
                
                <div class="sub-container pt-5" id="jsp-comment">
                    <h2 class="text-left">JSP Comments</h2>
                    <hr>
                    <p class="lead">A JSP comments is the one that marks text, which the container of the JSP must not be noticed or simple must be ignored. JSP comment is a very important , when you want to describe or give meaning to a part of your JSP.</p>
<pre class="sample-code">
    &lt;%-- This Is a sample Of JSP Comment Syntax --%&gt;
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
            <a href="index.html"><img src="../img/webtech2.png" alt="logo"></a>
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