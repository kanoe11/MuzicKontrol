<?php

//include '../config/config.php';
use Config;

$id = 0;
$update = false;
$titre = '';
$contenu = '';

if (isset($_POST['save'])){
    echo 'enreg';
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $typeIdArticle = isset($_POST['type_article']) ? $_POST['type_article'] : 3;
    $user_id = 0;
    //Si la requete est executé correctement elle renvoie vrai sinon il y a forcement une erreur
    //Ca evite de faire des die pour rien 
    if( $mysqli->query("INSERT INTO article (titre, user_id , contenu, type_article_id) VALUES('$titre', '$user_id','$contenu','$typeIdArticle')")) {
        http_response_code(200);

    }
    http_response_code(500);
    echo 'Erreur de base de données : '. mysqli_error($mysqli);       
   
}    

if (isset($_GET['supprimer'])){
    $id = $_GET['supprimer'];
    $mysqli->query("DELETE FROM article WHERE id = ".$id) or die($mysqli->error());

    header("Location: index.php");
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
    http_response_code(500);
    echo 'Erreur de base de données : '. mysqli_error($mysqli); 



