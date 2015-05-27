<?php

require '../Library/autoload.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);
try {
  $app = new $appClassName();
  //Only run the requested view if logged in
  if (isset($_GET["debug"]) 
      || strstr($app->HttpRequest->requestURI(), "login") !== FALSE
      || strstr($app->HttpRequest->requestURI(), "auth") !== FALSE
      || $app->user->isAuthenticated()) {
    $app->run();
  } else {//Otherwise, redirect to login page :)
    header('Location: ' . __BASEURL__ . "login");
    die();
  }
} catch (Exception $exc) {
  echo "<!--" . $exc->getMessage() . "\n\r" . $exc->getTraceAsString() . "-->";
  die();
}