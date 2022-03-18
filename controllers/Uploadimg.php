<?php  
require_once('../models/item.php');
?>
<?php

 if(isset($_POST['upload'])){
    // the path to store the uploaded image
    $target="../img/uploads/".basename($_FILES['image']['name']);

    // get all the sumbitted data from form
    $text=$_POST['text'];
    $image=$_FILES['image']['name'];
    createPost($image,$text);
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    }
    header("location: /index.php");
} 

?>