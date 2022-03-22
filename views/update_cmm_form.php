<?php     
require_once("../models/item.php");

?>
<form action="../controllers/update_cmm.php" >
    <?php $getid = $_GET['id']; ?>
    <input type="hidden" name='id_cmm' value="<?php  global $getid;  echo $getid;  ?>">
    <input type="text" placeholder="Edit your comment here...!" name="edit_cmm">
    <button type="submit" name="submit">Update</button>
    <!-- <button type ="submit" name="submit">Update</button> -->

</form>