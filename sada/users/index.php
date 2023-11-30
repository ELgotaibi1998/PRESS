<?php
 require_once "../connexion.php";
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Headers: *");
 print_r($_POST);
 $login=$_POST['login'];
 $pwd=$_POST['pwd'];
 $req=$con->prepare("SELECT * from useres where email='$login' and password='$pwd'; ");
 $req->execute();
 $articles=$req->fetchAll();
$x=json_encode($articles )  ;
 setcookie('login',json_encode($articles ),time ()+20000);
 
header("location: http://localhost:3000/admin?compte=$x")
 
?>