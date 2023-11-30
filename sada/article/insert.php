<?php

 require_once "../connexion.php";   
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
  $req->execute();
 $req=null;
$req=$con->prepare("SELECT id from articles ORDER BY  id DESC  LIMIT 1");
$req->execute();
$a=$req->fetch();$req=null;
$req=$con->prepare("INSERT into article_section (article,
section) 
values(
    ' $a[0]'
   ,'  $section'
    ) 
     ");
    $x= $req->execute(); 
    
?>
<script>
    window.location.replace("https://sadamowatine.ma/");
</script>