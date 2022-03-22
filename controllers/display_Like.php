
<?php 
session_start();
require_once('../models/item.php');
// if(isset($_POST['heart'])){
    $postid=$_GET['postid'];  
    $userid=$_SESSION['userid'];
    createlike($userid,$postid);
    
// }

// createlike(1,99);

header('Location:/index.php');
?>