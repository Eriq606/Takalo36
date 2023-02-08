    <section class="body_Info_categorie">
        <div class="container">

            <div class="row">

                <div class="Info_categorie">

                                <div class="image_objet">
                                    <?php for($i=0; $i<count($objet['images']); $i++){ ?>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list_image_objet">
                                        <img src="<?php echo site_url("assets/img/imgObjet/".$objet['images'][$i]['urlImage']); ?>" style="width: 400px; height:350px">
                                    </div>
                                    <?php } ?>
                                </div>

                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 information_object">
                                <div class="titre">
                                    <h2><?php echo $objet['titre']; ?></h2>
                                </div>

                                <div class="info">
                                    <p><?php echo $objet['description']; ?></p>
                                </div>
                                
                                <div class="prix">
                                    <label for=""> Prix : <?php echo $objet['prixEstimatif']; ?></label>
                                </div>
                                <?php if(!$envoye&&!isset($this->session->userActu["admin"])){ ?>
                                <a href="<?php echo site_url("choixObjet/choixObjet/".$objet['idObject']."/".$objet['idUtilisateur']); ?>"><button>Proposer Echange</button></a>
                                <?php } ?>
                            </div>

                </div>
            </div>
        </div>
        
    </section>