<?php
 require_once "../connexion.php";
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Headers: *");
 
 $req=$con->prepare("SELECT * from opinion");
 $req->execute();
 $articles=$req->fetchAll();
echo (json_encode($articles ))  ;
 
 
 
?>