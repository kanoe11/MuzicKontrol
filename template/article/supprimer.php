<?php
include (realpath('../../config/config.php'));
if (isset($_GET['del'])){
        $id = $_GET['del'];
        $mysqli->query("DELETE FROM article WHERE id =".$id) or die($mysqli->error());
        http_response_code(200);
        echo json_encode('ok');

    } else {
        http_response_code(500);
        echo 'Erreur de base de données : '. mysqli_error($mysqli);
    }

?>