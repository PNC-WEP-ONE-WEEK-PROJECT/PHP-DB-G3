<?php   
require_once("../models/item.php");

$cmm_id = $_GET['id_cmm'];
$get_cmm = $_GET['edit_cmm'];
updateCmm($cmm_id,$get_cmm);
header("Location:/index.php");

?>
