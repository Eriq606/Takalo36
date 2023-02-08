<section class="body_Info_categorie">
        <div class="container">

            <div class="row">

                <div class="Info_categorie">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 list_categorie">
                            <?php for($i=0; $i<count($mesObjets); $i++){ ?>
                                <a href="<?php echo site_url("choixObjet/changeObject/".$i."/".$idAutreObjet."/".$idAutre); ?>">
                                    <div class="image_objet">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list_image_objet">
                                            <img src="<?php echo site_url("assets/img/imgObjet/".$mesObjets[$i]['images'][0]['urlImage']); ?>" style="width: 200px; height:150px">
                                        </div>                                        
                                    </div>

                                    <div class="info_objet">
                                        <p><?php echo $mesObjets[$i]['titre']; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                                
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 object_choose">
                            <div class="valid_object">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image_categorie">
                                    <img src="<?php echo site_url("assets/img/imgObjet/".$mesObjets[$objetActu]['images'][0]['urlImage']); ?>" alt="" style="width: 400px; height:350px; margin-left:150px">
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 info_objet">
                                    <div class="titre">
                                        <h2><?php echo $mesObjets[$objetActu]['titre']; ?></h2>
                                    </div>

                                    <div class="info">
                                        <p><?php echo $mesObjets[$objetActu]['description']; ?></p>
                                    </div>
                                    
                                    <div class="prix">
                                        <label for=""> Prix : <?php echo $mesObjets[$objetActu]['prixEstimatif']; ?></label>
                                    </div>
                                    <a href="<?php echo site_url("proposer/index/".$this->session->userActu["idutilisateur"]."/".$mesObjets[$objetActu]["idObject"]."/".$idAutre."/".$idAutreObjet); ?>"><button>Valider</button></a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        
    </section>