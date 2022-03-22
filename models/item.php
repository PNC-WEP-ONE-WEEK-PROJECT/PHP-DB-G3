<?php
// database connection
$db=new PDO("mysql:host=localhost;dbname=facebook2.0","root","");
/**
 * Get all items  
 * @return array of items 
 */
function getItems()
{
    global $db;
    $statment=$db->query("SELECT images,descriptions,datepost,postsid from posts");
    $item=$statment->fetchAll();
    return $item;

}

/**
 * Get a single item
 * @param integer $id : the item id
 
 * @return associative_array: the item related to given item id
 */
function getItemById($postsid)
{
    global $db;
    $statment=$db->prepare("SELECT * from posts WHERE postsid=:postsid");
    $statment->execute([
        ':postsid'=> $postsid,
    ]);
    $item =$statment ->fetch();
    return $item;

}

/**
 * Remove item related to given item id
 * @param integer $id :  the id of the item to delete
 
 * @return boolean: true if deletion was successful, false otherwise
 */


/**
 * Update a Item given id and attibutes
 * @param integer $id :  		the id of the item to update
 * @param string  $item_name :  the item name
 * @param integer $price :  	the item price
 * 
 
 * @return boolean: true if deletion was successful, false otherwise
 */
function updateItem($postsid,$text,$image)
{
    global $db;
    $statment=$db->prepare("UPDATE posts SET descriptions=:descriptions,images=:images where postsid=:postsid;");
    $statment ->execute([
        ':descriptions' => $text,
        ':images' =>$image,
        'postsid' =>$postsid
        
        
    ]);
    return $statment ->rowCount() == 1;
}


/**
 * Create a new item 
 * @param string  $item_name :  	the item name
 * @param integer $price :  		the price
 
 * @return boolean: true if create was successful, false otherwise
 */

function createPost($userid,$image,$descriptions)
{
    global $db;
    $statment=$db->prepare("INSERT INTO posts (userid,descriptions,images) values (:userid,:descriptions ,:img)");
    $statment ->execute([
        ':descriptions' => $descriptions,
        ':img' => $image,
        ':userid' => $userid
    ]);
    return $statment ->rowCount() == 1;
}


function deletePost($id)
{
    global $db;
    $statment=$db->prepare("DELETE FROM posts WHERE postsid =:postsid;");
    $statment ->execute([
        ':postsid' => $id
    ]);
    return ($statment ->rowCount() ==1);
}


function createCmm ($descriptions,$postid)
{
    global $db;
    $statment=$db->prepare("INSERT INTO comments (descriptions,postid) values (:descriptions,:postid);");
    $statment ->execute([
        ':descriptions'=>$descriptions,
        ':postid'=>$postid
    ]);
    return $statment ->rowCount() == 1;
}

function deleteCmm($commentid){
    global $db;
    $statment =$db ->prepare('DELETE FROM comments WHERE commentid=:commentid ');
    $statment ->execute([
        ':commentid' => $commentid
    ]);
    return $statment ->rowCount() == 1;
}
// GET COMMENT FROM DB AND DISPLAY ON WEBSITE
function updateCmm($commentid,$descriptions)
{
    global $db;
    $statment=$db->prepare("UPDATE comments SET descriptions=:descriptions where commentid=:commentid;");
    $statment ->execute([
        ':commentid' => $commentid,
        ':descriptions' => $descriptions
    ]);
    return $statment -> rowCount() == 1;

}

function Display_cmm() {
    
    global $db;
    $statment=$db->query("SELECT comments.descriptions,posts.images,comments.postid,commentid FROM comments INNER JOIN posts ON comments.postid=posts.postsid");
    $item=$statment->fetchAll();
    return $item;

}

function createlike($userid,$postid){
    global $db;
    $statment = $db ->prepare("INSERT INTO likes(userid,postid) values (:userid,:postid)");
    $statment ->execute([
        ':userid' => $userid,
        ':postid' => $postid
    ]);
    return $statment ->rowCount() == 1;
}

function likeonpic(){
    global $db;
    $statment = $db->query("SELECT * FROM likes");
    $like = $statment->fetchAll();
    return $like;
    // return $statment ->rowCount() == 1;
}


