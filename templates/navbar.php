<?php

require_once("header.php");

?>
<nav class="navbar">
  <div class="searchs">
    <a href="#"><img class='logo' src="../img/facebook.png" alt=""></a>
    <input class="search" type="text" name='search' placeholder="Type for search...">
      <i class='fas fa-search fass' style='font-size:24px'></i>
  </div>
  <div class="icon">
    <a href="../index.php" id='home'> <i class='fas fa-home  fass' style='font-size:24px;'></i></a>
    <i class='far fa-user-circle fass fas' style='font-size:24px;'></i>
    <a href="templates/friends.php" id='user_friend' onclick="showcolor()"><i class='fas fa-user-friends fass' style='font-size:24px;'></i></a>
</nav> 

