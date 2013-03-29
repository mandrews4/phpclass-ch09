<?php // Script 9.7 - welcome.php
session_name("MYSESSION");
session_start();
define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
include('templates/header.html');
print '<h2>Welcome to the J.D. Salinger Fan Club!</h2>';
print "<p>Hello, {$_SESSION['email']}!</p>";
date_default_timezone_set('Canada/Eastern');
$time_logged_in = date('g:i a', $_SESSION['loggedin']);
print "<p>You have been logged in since: $time_logged_in</p>";
print '<p><a href="logout.php">Click here to logout.</a></p>';
include('templates/footer.html');
?>
