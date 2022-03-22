<?php
/**
 * Your code here
 */
require_once("../models/item.php");
$commentid  = $_GET['id'];
deleteCmm($commentid);
header('location:/index.php');