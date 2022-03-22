<?php
session_start();
//  REQUIRE NAVE BAR
require_once('templates/header.php');

require_once("templates/navbar.php");
// REQUIRE CONATIENR 
require_once("views/post_view.php");
// require form_AddPost

//  REQUIRE BODY-FB
require_once("templates/footer.php");
$_SESSION['userid']=1;