<?php
 require_once "../connexion.php";
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Headers: *");
 header("charset=utf8");
 $req=$con->prepare("SELECT * from articles");
 $req->execute();
 $articles=$req->fetchAll();
echo (json_encode($articles ))  ;
 
 
 
?>