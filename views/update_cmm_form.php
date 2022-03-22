<?php     
require_once('../templates/navbar.php');
require_once("../models/item.php");

?>
<form action="../controllers/update_cmm.php" >
    <?php $getid = $_GET['id']; ?>
    <div class="update_cmm">
        <input type="hidden" name='id_cmm'value="<?php  global $getid;  echo $getid;  ?>">
        <input type="text" class='up_cmm'  placeholder="Edit your comment here...!" name="edit_cmm" ​>
        <button type="submit" name="submit" class='submits'>Update</button>
    </div>
    <!-- <button type ="submit" name="submit">Update</button> -->

</form>