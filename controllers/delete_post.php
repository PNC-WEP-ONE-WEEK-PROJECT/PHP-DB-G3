<?php
/**
 * Your code here
 */
require_once("../models/item.php");
$id  = $_GET['id'];
deletePost($id);
header('location:/index.php');