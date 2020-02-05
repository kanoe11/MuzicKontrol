<?php
include('../../model/Article.php');
include (realpath('../../config/config.php'));
if (isset($_GET['del'])){
        $id = $_GET['del'];
        $article = new Article();
        $article->delete($id);
        http_response_code(200);
    }

?>