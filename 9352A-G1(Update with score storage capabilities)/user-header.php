<!--
  Navigation that is used when there is a user logged in.
  It basically adds the username to the nav bar.
-->


<?php
    include_once 'php/db-inc.php';
 ?>

<header>
    <nav id="scroll-nav" class="navbar navbar-expand-lg navbar-dark bg-dark pl-10">
        <a href="/9352A-G1/index.php" class="navbar-brand">
            <img src="/9352A-G1/img/webtech2.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse-btn" aria-controls="collapse-btn" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapse-btn">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="/9352A-G1/html/lessons.php" class="nav-link dropdown-toggle mr-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lessons</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="/9352A-G1/html/java-servlets.php" class="dropdown-item">Lesson 1: Servlets</a>
                        <a href="/9352A-G1/html/php.php" class="dropdown-item">Lesson 2: PHP</a>
                        <a href="/9352A-G1/html/nodejs.php" class="dropdown-item">Lesson 3: Node.js</a>
                        <a href="/9352A-G1/html/jsp.php" class="dropdown-item">Lesson 4: JSP</a>
                        <a href="/9352A-G1/html/web-security.php" class="dropdown-item">Lesson 5: Web Security</a>
                   </div>
               </li>
               <li class="nav-item">
                   <a href="/9352A-G1/html/self-assessment.php" class="nav-link mr-3">Self-Assessment</a>
               </li>
               <li class="nav-item dropdown">
                 <a href="/9352A-G1/html/lessons.php" class="nav-link dropdown-toggle mr-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <?php
                      echo $_SESSION['username'];
                   ?>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a href="/9352A-G1/php/logout.php" class="dropdown-item">Log out</a>
                </div>
               </li>
           </ul>
       </div>
    </nav>
</header>
