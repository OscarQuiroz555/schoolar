<?php
session_start();

session_unset();
session_destroy();

header('Refresh:0; url:"http://localhost/schoolar/src/signup.html"');
?>