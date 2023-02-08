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

                        <form action="<?php echo site_url("ficheObjet/updateObjet"); ?>" method="post">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 modif_object">
                                <div class="titre">
                                    <input value="<?php echo $objet['titre']; ?>" name="titre" type="text" class="form-control" placeholder="Titre">
                                </div>

                                <div class="info">
                                    <input value="<?php echo $objet['description']; ?>" name="desc" type="text" class="form-control" placeholder="Description">
                                </div>
                                
                                <div class="prix">
                                    <input value="<?php echo $objet['prixEstimatif']; ?>" name="prix" type="text" class="form-control" placeholder="Prix">
                                </div>
                                <input type="hidden" name="idObject" value="<?php echo $objet["idObject"]; ?>">
                                <button type="submit">Valider</button>

                            </div>
                        </form>
                        <a href="<?php echo site_url("ficheObjet/historique/".$objet["idObject"]); ?>"><button>Voir l'historique</button></a>


                </div>
            </div>
        </div>
        
    </section>