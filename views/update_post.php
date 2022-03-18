<?php     
require_once('../templates/header.php');
require_once("../models/item.php");

?>

<form action="../controllers/edit_post.php" method="post" enctype="multipart/form-data">
    <?php
    // TO DO:
    // Get the id of the item to update in query
    $id = $_GET['id'];
    // Get data for this item from database
    $item = getItemById($id);

    ?>
    <p>Edit your questions</p>
    <input type="hidden" name="postsid" value='<?php echo $id?>'>
    <input type="text" name="descriptions" placeholder="Rewrite your message... " value="<?php echo $item['descriptions'];?>">
    <input type="file" name="image">
    <img src="../img/uploads/<?php echo $item['images'] ?>" alt="">
    <button type="submit" name='submit'>Submit</button>

</form>