
<?php
require_once("../models/item.php");
 if(isset($_POST['submit'])){
    // the path to store the uploaded image
    $target="../img/uploads/".basename($_FILES['image']['name']);

    // get all the sumbitted data from form
    $postsid = $_POST['postsid'];
    $text=$_POST['descriptions'];
    $image=$_FILES['image']['name'];
    updateItem($postsid,$text,$image);
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    }
   header("location: /index.php");
} 

?>

