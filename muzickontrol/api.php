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
    $dir = "../img/logoIcons/*";
    $images = glob( $dir );
    $listImg = getName($images);

    echo json_encode($listImg);
    http_response_code(200);
}

if (isset($_GET['slider'])){
  $dir = "../img/slider/*.jpg";
  $images = glob( $dir );
  echo json_encode(getName($images));
}

function getName(array $names) {
  $listImg = [];
  foreach( $names as $i) {
    $listImg[] = basename($i);
  }
  return($listImg);
}