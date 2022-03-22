<?php 

    require_once("../models/item.php");
    if (isset($_GET['add_cmm'])){

        $description = $_GET['comment_here'];
        $postid = $_GET['postsid'];
        createCmm($description,$postid);
    
    }
    header("Location:/index.php");



?> 