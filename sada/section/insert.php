<?php

 require_once "../connexion.php"; 
 echo'fffffffffff';
print_r ($_POST)  ;
$titre=$_POST["titre"];
$data=$_POST["data"];
$article=$_POST["article"];
$image=$_POST["image"];
$description=$_POST["description"];
$type=$_POST["type"];
$section= $_POST["section"];
 

 $req=$con->prepare("INSERT into articles (description,
 article,data,type,image,titre) 
 values(
     ' $description'
    ,'  $article',
     
     ' $data',
     '$type',
     '$image ', 
     '     $titre'
     ) 
      ");
 $a=$req->execute();
 
  print_r($a);
  
?>