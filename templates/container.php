
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
 

