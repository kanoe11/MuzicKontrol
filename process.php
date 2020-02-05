<?php
include('model/Article.php');


$update = false;
$titre = '';
$contenu = '';

//CECI N EST PAS L'AFFICHAGE
if (isset($_POST['save'])){

    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $visible = $_POST['visible'];
    $typeIdArticle = isset($_POST['type_article']) ? $_POST['type_article'] : 1;
    $user_id = 0;
    //Si la requete est executé correctement elle renvoie vrai sinon il y a forcement une erreur
    //Ca evite de faire des die pour rien 
    $article = new Article();
    $article->save($titre,$contenu,$typeIdArticle,$user_id,$visible);
    http_response_code(200);

    
   /* http_response_code(500);
    echo 'Erreur de base de données : '. mysqli_error($mysqli);   */    
   
}    

if (isset($_GET['supprimer'])){
    $id = $_GET['supprimer'];
    $mysqli->query("DELETE FROM article WHERE id = ".$id) or die($mysqli->error());

   
}


if (isset($_POST['update'])){
    echo "ici";
    $titre = $_POST['titre'];
    $id = $_POST['id'];
    $contenu =  $_POST['contenu'];
    $resultat  =  addslashes($contenu);
    $sql = "UPDATE article SET titre='$titre' ,contenu='".$resultat."' WHERE id=".$id;    
    $mysqli->query($sql) or  die (mysqli_error($mysqli));
    http_response_code(200);
}
    /*http_response_code(500);
    echo 'Erreur de base de données : '. mysqli_error($mysqli); */



