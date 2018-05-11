<!--
  Navigation that is used when there is a user logged in.
  It basically adds the username to the nav bar.
-->


<?php
    include_once 'php/db-inc.php';
    //session_start();
 ?>

<header>
    <nav id="scroll-nav" class="navbar navbar-expand-lg navbar-dark bg-dark pl-10">
        <a href="index.php" class="navbar-brand">
            <img src="img/webtech2.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse-btn" aria-controls="collapse-btn" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapse-btn">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="./html/lessons.php" class="nav-link dropdown-toggle mr-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lessons</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="./html/java-servlets.php" class="dropdown-item">Lesson 1: Servlets</a>
                        <a href="./html/php.php" class="dropdown-item">Lesson 2: PHP</a>
                        <a href="./html/nodejs.php" class="dropdown-item">Lesson 3: Node.js</a>
                   </div>
               </li>
               <li class="nav-item">
                   <a href="#" class="nav-link mr-3">Self-Assessment</a>
               </li>
               <li class="nav-item">
                   <a href="#" class="nav-link">About Us</a>
               </li>
               <li class="nav-item dropdown">
                 <a href="./html/lessons.php" class="nav-link dropdown-toggle mr-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <?php
                      echo $_SESSION['username'];
                   ?>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a href="php/logout.php" class="dropdown-item">Log out</a>
                </div>
               </li>
           </ul>
       </div>
    </nav>
</header>
