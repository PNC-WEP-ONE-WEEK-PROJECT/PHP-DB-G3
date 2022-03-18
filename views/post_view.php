<?php
    // require_once('controllers/Uploadimg.php');
    require_once('templates/header.php');
    require_once('models/item.php');
?>
<!-- header of facebook -->
<div class="container1">
    <img src="../img/brother.jpg" alt="" name="pic_profile" class="pic_profile">
    <input type="text" name="post_text" class="post_text" placeholder="  What's on your mind...?">
    <div class="choosepic">
        <a href="../templates/container.php" class='link'><i class='fas fa-photo-video' style='font-size:24px'></i>Create_Your_Photo</a>
    </div>
</div>


<!-- loop to get the image and text from the databases -->
<?php 
$getitem = getItems();
foreach ($getitem as $img):
?>

<!-- container to display the body -->
<div class="container1">
    <div class="logo_fb">
        <img class='profile' src="../img/photo.jpg" alt="">
        <div class='text'>
            <h1 class="title">sophiem loem</h1>
            <p class="hours"><?php echo $img['datepost'] ?></p>
        </div> 
        <div class="icon1">
           <div class="icons">
           <a href="views/update_post.php?id=<?php echo $img['postsid'];?>"> <i class='far fa-edit' style='font-size:36px' name='edit' id="edit" ></i></a>
           <a href="controllers/delete_post.php?id=<?php echo $img['postsid']; ?>"> <i class='fas fa-trash-alt' style='font-size:36px' name='delete' id='delete'></i></a>
           </div>
     
       </div>
    </div>
    <div class="hearder_post">
       <p class="description"><?php echo $img['descriptions']; ?></p>  
      
    </div>
 
    <div class="img_post">
        <?php  
            $if_has_img = false;
            if (!empty($img['images'])){
                $if_has_img = true;
            }
        ?>
        <?php
            if ($if_has_img == true){
        ?>
            <img class='pic_post' src='../img/uploads/<?php echo $img['images'] ?>'.alt="">;
        <?php
            }
        ?>
    </div>
    <div class="icon_like_cmm " >
        <i class='far fa-heart' style='font-size:24px'></i>
        <i class='far fa-comment-alt' style='font-size:24px'></i>
    </div>
    <div class="showcmm">
        
    </div>
    <div class="comment">
        <img class='profile_cmm' src="../img/photo.jpg" alt="">
        <input type="text" name='comment_here' id='cmm' placeholder="Comment here ">
    </div>
</div> 
 <?php  endforeach; ?>



