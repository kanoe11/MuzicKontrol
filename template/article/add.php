<?php
 include('../../template/header.php');
    include (realpath('../../config/config.php'));
?>
    <section id="article"  >
        <div class="container">
        <div class="col-lg-12 mx-auto text-center pb-5">
            <h2>Ajouter un article</h2>
        </div>
        <div class="row">
            <!--form -->
            <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5" id = "formArtic">
                <!--  form tabs -->
                <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                <li class="nav-item">
                    <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                    <i class="fab fa-wpforms"></i>
                                        Formulaire Article
                                    </a>
                </li>
                </ul>
                <!-- End -->

                <!--  form content -->
                <div class="tab-content">
                    
                <!--  info-->
                    
                <div id="nav-tab-card" class="tab-pane fade show active">

                    <form role="form"  method="POST" >
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" id="titre"  name="titre"  placeholder="Titre" required class="form-control">
                    </div>
                    <div class="form-group">
                    <select name ='type_article'>
                    <?php
                    $config = new Config();
                    var_dump($config);
                    $result = $config->config->query(" select * from type_article ");
                    $data = $result->fetch_all(MYSQLI_ASSOC);

                    for ( $i = 0 ; $i < count($data); $i++ ) { ?>
                    <option value="<?php echo $data[$i]['id']?>"> <?php echo $data[$i]['nom'];?> </option>  
                    <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="cardNumber">Contenu</label>
                        <div class="input-group">
                        <textarea name="contenu" id="contenu" class="md-textarea form-control" rows="3" class="form-control" required></textarea> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                    <button id="add" name="enregister" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Envoyez  </button>
                    </form>
                </div>
                </div>
                <!-- End -->
            </div>
            </div>
        </div>
        </div>
            </div>
            </div>
            </div>
        </div>
            </div>
            </div>
        </div>
        </section>
<?php// include 'footer.php';