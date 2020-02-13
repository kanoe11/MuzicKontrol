<?php 

if(isset($_GET['all'])) {
    include('src/Model/Article.php');
    $article = new Article();
    $result = $article->getAll();

    $fp = fopen('articles.json', 'w');
    fwrite($fp, json_encode($result));
    fclose($fp);

    echo json_encode(array($result));
    http_response_code(200);
}



if(isset($_GET['partenaires'])) {
    $dir = "../img/logoIcons/*.jpg";
    $images = glob( $dir );
    var_dump($images);
    $fp = fopen('images.json', 'w');
    fwrite($fp, json_encode($images));
    fclose($fp);
    echo json_encode(array($images));
    http_response_code(200);
}

if (isset($_GET['slider'])){
  $dir = "../img/slider/*.jpg";
  $images = glob( $dir );
  $listImg = [];
  foreach( $images as $i) {
    $listImg[] = basename($i);
  }
  echo json_encode($listImg);
}