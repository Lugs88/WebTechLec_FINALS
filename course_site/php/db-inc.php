<!--
  this php file handles importing the database

-->

<?php

  $dbServerName = "localhost";
  $dbUserName = "root";
  $dbPassword = "";
  $dbName = "webtech";

  $mysqli = new mysqli($dbServerName,$dbUserName ,$dbPassword ,$dbName );
