<?php
  // set the access details as contants
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD','root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'onlineshopdb');
DEFINE('DB_PORT', '8889');

// make connection
$conn =  new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
// set the encoding .. optional but recommended
$conn->set_charset("utf8");
?>