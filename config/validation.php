<?php
session_start();
if(isset($_SESSION["user_nick"])){
}else{
  header("Location: ../views/logout.php");
}?>