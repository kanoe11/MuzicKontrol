<?php include('../../template/header.php');
if(isset($_GET['voir']) && !empty($_GET['voir'])) {
	$id = $_GET['voir'];
	$result = $mysqli->query(" select * from article where id =". $id);
    $data = $result->fetch_array(MYSQLI_ASSOC);
}
?>

    <div class="container">
      <div class="row">
            <h1><?php echo $data['titre']; ?></h1>
            <div class="post-body  mt-5">
                  <p><?php echo $data['contenu'] ?>
            </div>
        </div>
    </div>
<?php include 'footer.php';
?>