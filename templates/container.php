<!-- f &#128516; &#128525; &#128151; sticker -->
<div class="controlCon">
        <div class="container">

            <img src="../img/brother.jpg" alt="" name="pic_profile" class="pic_profile">
            <input type="text" name="post_text" class="post_text" placeholder="  What's on your mind...?">
        </div>
        <div class="hr"></div>
        <div class="typePost">
           
                <label for="file-input" class="file-input">
                    <i class='fas fa-photo-video' style='font-size:24px;color:rgb(121, 113, 113) ;'>&nbsp;&nbsp;Picture&nbsp;or Video </i>
                </label>
                <input id="file-input" type="file" style="display:none;" />

        </div>



<form method="post" enctype="multipart/form-data" action="../controllers/Uploadimg.php">
    <div class="createPost">
        <input type="hidden" name='size' value='1000'>
        <div>
            <input type="file" name="image" placeholder="please choose your image here">
        </div>
        <div>
            <textarea name="text" id="text" cols="30" rows="4"></textarea>
        </div>
        <div>
            <button type="submit" name="upload"> Create new Post</button>
        </div>
    </div>
  </form>
 

