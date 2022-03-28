<?php  
require_once("navbar.php");
require_once("header.php"); 
?>
<div class="freinds">
    <?php   for ($i = 0; $i <10; $i++):  
        $name = array("Sophim Leom","Savoeru Pheap","SreyPich Ly","Tim Bin","Sopha Roth","Sreyleak Eal","Thib Tik","Vichet Morm","Sarath Orn","Sauth Phoek");
        $img = array("facebook.png","IMG_0951.jpg","sea.jpg","photo.jpg","brother.jpg","Phim.jpg","img2.jpg","sister.jpg","pic.jpg","Capture.png")
    ?>
    <div class="freind_pf">
        <?php if($i<10): ?>
        <img src="../img/<?php echo $img[$i]?>" alt="" class="fri_pf">
        <?php endif; ?>
        <h2 class="friend_name"><?php  echo $name[$i]; ?></h2>
        <div class="add_delete">
            <button 
             class="add_freind" id="add_freind" >Add freinds</button>
            <button class="delete">Delete</button>
        </div>
    </div>
    <br>
    <?php  endfor; ?>

</div>