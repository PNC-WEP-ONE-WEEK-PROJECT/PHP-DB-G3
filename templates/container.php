<?php

require_once('../templates/header.php');
require_once('../templates/navbar.php')

?>


<form method="post" enctype="multipart/form-data" action="../controllers/Uploadimg.php">
    <div class="createPost">
        <input type="hidden" name='size' value='1000'>
        <div class="upload">
            <textarea name="text" id="text" cols="30" rows="4" placeholder="Type your caption here"></textarea>
            <input type="file" name="image" class="uploads">
        </div>
        <div class="border">
            <img src="../img/uplaodimg.ico" alt="" >
        </div>
        
        <div>
        </div>
        <div>
            <button type="submit" name="upload" class='Post'>Posts</button>
        </div>
    </div>
</form>
 

