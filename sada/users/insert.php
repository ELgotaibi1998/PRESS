<?php

 require_once "../connexion.php";
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Headers: *");
 
print_r ($_POST)  ;
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$role=$_POST["role"];
$pwd=$_POST["pwd"];  
 $req=$con->prepare("INSERT into useres (nom,
 prenom,email,role,password ) 
 values(
     ' $nom'
    ,'  $prenom',
     
     ' $email',
     '$role',
     '$pwd '
     ) 
      ");
 $req->execute();
   header("location: http://localhost:3000/admin?msg=utilisateur à été ajouter avec succée");
   die()
  
?>