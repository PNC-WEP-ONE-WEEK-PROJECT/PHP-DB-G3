<?php
    // require_once('controllers/Uploadimg.php');
    require_once('models/item.php');
?>
<!-- header of facebook -->
<div class="container1">
    <div class="hearder">
        <img src="../img/brother.jpg" alt="" name="pic_profile" class="pic_profile">
        <input type="text" name="post_text" class="post_text" placeholder=" What's on your mind...?">
    </div>
    <div class="choosepic">
        <a href="../templates/container.php" class='link'><i class='fas fa-photo-video' style='font-size:24px '></i>Create_Your_Photo</a>
    </div>
</div>

<!-- loop to get the image and text from the databases -->
<?php 
$getitem = getItems();
$display_comt=display_cmm();
// print_r($getitem);
foreach ($getitem as $img):
$index;
// $getlike =likeonpic($like);
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
           <a href="views/update_post.php?id=<?php echo $img['postsid'];?>"> <i class='far fa-edit' style='font-size:30px' name='edit' id="edit" ></i></a>
           <a href="controllers/delete_post.php?id=<?php echo $img['postsid']; ?>"> <i class='fas fa-trash-alt' style='font-size:30px' name='delete' id='delete'></i></a>
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
    
            <!-- place forz -->
   
    
     <?php  
        $increment = 0;
        foreach ( likeonpic() as $likeimg):
                if($likeimg['postid'] == $img['postsid']){
                    $increment++;
                }
        
        endforeach; ?>
  
  <div class="show_comment" style="display:none" name="cmm">
        <?php   
        $coun_cmm = 0;
        $postid = $img['postsid'];
        foreach ($display_comt as $com):
            $cmm_postsid = $com['postid'];
            if ($postid == $cmm_postsid):
                $coun_cmm += 1;
                echo '<img class="profile_cmm" src="../img/photo.jpg" alt="">';
                echo "<p type='text' name='comment' class='cmms' '>".$com['descriptions'] ."</p>";
            
        ?>
            <div class="del_edit  edit_del ">
                <a href='controllers/delete_comment.php?id=<?php echo $com['commentid']; ?>'> <i class='fas fa-trash-alt ' style='font-size:24px' name='delete' id='delete'></i></a>
                <a href='views/update_cmm_form.php?id=<?php echo  $com['commentid']; ?>'> <i class='far fa-edit' style='font-size:24px' name='edit' id='edit' ></i></a>
            </div>
        <?php 
        endif; 
        endforeach;
        ?>
           
    </div>

    
        <div id="icon_like_cmm" >
            <button  type="submit" onclick="control_both_likeUnlike()" name="heart" class="btn_like"> <a href="../controllers/display_Like.php?postid=<?php echo $img['postsid'];?>">  <i class='far fa-heart' class="btn_like"​​ name="heart"  style='font-size:24px;'><?php echo $increment; ?>likes</i> </a></button>
            <button type='submit' onclick="control_see_unsee_cmm()" class="btn_cmm" name='cmm' > <i class='far fa-comment-alt' class="btn_cmm" name='cmm' style='font-size:24px'><?php  echo $coun_cmm;  ?>comments</i> </button>
        </div>

    <form action="../controllers/add_comment.php">
        <div class="comment">
            <input type="hidden" name="postsid" value="<?php echo $img['postsid'] ?>">
            <img class='profile_cmm' src="../img/photo.jpg" alt="">
            <input type="text" name='comment_here' id='cmm' placeholder="Comment here ">
        <button type='submit' name='add_cmm' class="sends"> <a href="../controllers/add_comment.php?id=<?php echo $img['postsid']; ?>" ><i class="material-icons send" style="font-size:36px;cursor:pointer;">send</i></a></button> 
        </div>
    </form>

  
</div>


<?php global $index; $index+=1;?>

 <?php  endforeach; ?>



