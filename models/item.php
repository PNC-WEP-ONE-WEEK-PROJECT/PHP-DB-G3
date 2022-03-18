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
function deletePost($id)
{
    global $db;
    $statment=$db->prepare("DELETE FROM posts WHERE postsid =:postsid;");
    $statment ->execute([
        ':postsid' => $id
    ]);
    return ($statment ->rowCount() ==1);
}

function deleteCmm($commentid){
    global $db;
    $statment =$db ->prepare('DELETE FROM comments WHERE commentid=:commentid ');
    $statment ->execute([
        ':commentid' => $commentid
    ]);
    return $statment ->rowCount() == 1;
}

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

function updateCmm($commentid)
{
    global $db;
    $statment=$db->prepare("UPDATE comments SET commentid=:commentid where commentid=:commentid");
    $statment ->execute([
        'commentid' => $commentid
    ]);

}

/**
 * Create a new item 
 * @param string  $item_name :  	the item name
 * @param integer $price :  		the price
 
 * @return boolean: true if create was successful, false otherwise
 */
function createPost($img, $descriptions)
{
    global $db;
    $statment=$db->prepare("INSERT INTO posts (descriptions,images) values (:descriptions ,:img)");
    $statment ->execute([
        ':descriptions' => $descriptions,
        ':img' => $img
    ]);
    return $statment ->rowCount() == 1;
}

function createCmm ($descriptions)
{
    global $db;
    $statment=$db->prepare("INSERT INTO comments (descriptions) values (:descriptions)");
    $statment ->execute([
        ':descriptions'=>$descriptions
    ]);
}



