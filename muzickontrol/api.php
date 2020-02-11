<?php 
include('src/Model/Article.php');
$article = new Article();
if(isset($_GET['all'])) {
    $result = $article->getAll();

    $fp = fopen('articles.json', 'w');
fwrite($fp, json_encode($result));
fclose($fp);

    echo json_encode(array($result));
    http_response_code(200);
}