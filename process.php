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
}    


if (isset($_POST['update'])){
    $titre = $_POST['titre'];
    $id = $_POST['id'];
    $contenu =  $_POST['contenu'];
    $typeIdArticle = isset($_POST['type_article']) ? $_POST['type_article'] : 1;
    $article = new Article($id,$titre,$contenu);
    $result = $article->update();
    if($result) {
        http_response_code(200);   
    } else {
       echo json_encode(array($result));
        http_response_code(500);
    }
}
    /*http_response_code(500);
    echo 'Erreur de base de données : '. mysqli_error($mysqli); */



