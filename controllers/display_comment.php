<?php
session_start();
require_once('../models/item.php');
    // if(isset($_GET['send'])){
        $postid =$_GET['postid'];
        $userid=$_SESSION['userid'];
        // $descriptions = $_GET['descriptions'];
        echo $descriptions;
        createCmm ($userid,$postid,$descriptions);
    // }
    
    // header('Location:/index.php');

?>