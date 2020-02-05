<?php include('config/Config.php');
    $config = new Config();
    $mysqli = $config->config;
 ?>
 <button><a href="template/article/add.php">ajouter</a></button>
<div class="table-responsive">      
              <table class="table condensed"> 
                <thead>  
                    <tr> 
                        <th>Id </th>
                        <th>Titre </th>
                        <th> apercu </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <?php 
              /* $offset = 50;
                  $beginPage = 1;
                    if(isset($_GET['beginPage'])) {
                      $beginPage = $_GET['beginPage'] * $offset ;
                    } */
                    // AFFICHAGE !!!
                    $result = $mysqli->query("SELECT * FROM article where visible = 1");
                    $data = $result->fetch_all(MYSQLI_ASSOC);
                    
                    for ( $i = 0 ; $i < count($data); $i++ ) { 
                      echo $data[$i]['nom'] = '' ;
                      $data[$i]['prenom'] = '';
                      ?>
                       <?php if (strlen($data[$i]['contenu']) > 300) {
                          $strraccourcis =  substr($data[$i]['contenu'],0,12);
                        } else {
                            $strraccourcis =  $data[$i]['contenu'];
                          }
                     ?> 
                        <tr class="news" data-id="<?php echo $data[$i]['id']?>"> 
                            <td> <?php echo $data[$i]['id']; ?> </td>
                            <td> <?php echo $data[$i]['titre']; ?> </td>
                            <td class="textToLong"> <?php echo $strraccourcis. "..." ; ?> </td>
                            <td> <?php echo "<a href='template/article/view.php?voir=".$data[$i]['id']."'>voir </a>" ?> </td>
                            <td> <?php echo "<a class='modify' href='template/article/modify.php?mod=".$data[$i]['id']."'>modifier</a>" ?> </td>
                            <td> <?php echo "<a class='delete' href='template/article/supprimer.php?del=".$data[$i]['id']." ' data-id=".$data[$i]['id'].">supprimer</a>" ?> </td>
                        </tr>
                   <?php }
                   $result->free();
                    ?>
              </table>
            </div>