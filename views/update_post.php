<?php     

require_once('../templates/header.php');
require_once("../models/item.php");
require_once("../templates/navbar.php");

?>

<form action="../controllers/edit_post.php" method="post" enctype="multipart/form-data" class='update'>
    <?php
    // TO DO:
    // Get the id of the item to update in query
    $id = $_GET['id'];
    // Get data for this item from database
    $item = getItemById($id);

    ?>
    <div class="updates">
        <div class="center">
            <p>Edit your questions</p>
            <input type="hidden" name="postsid" value='<?php echo $id?>'>
            <div class="text">
                <input type="text" name="descriptions" class='texts' placeholder="Rewrite your message... " value="<?php echo $item['descriptions'];?>">
            </div>
            <div class="Up_photo">
                <img class="photo" src="../img/uploads/<?php echo $item['images'] ?>" alt="">
            </div>
            <div class="img">
                <input type="file" name="image">
            </div>
            <button type="submit" name='submit' class='submit'>Submit</button>
        </div>
    </div>
</form> 
