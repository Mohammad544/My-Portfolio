<?php

session_start();

//Takes all the session variables that I created when logged in and deletes all the values inside these session variables
session_unset(); 

//Destroying all sessions
session_destroy();

//Redirecting To login Page
header("Location: login.html");

?>