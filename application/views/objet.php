<section class="body_Info_categorie">
        <div class="container">
            <div class="row">
                <div class="Info_categorie">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 list_categorie">
                        <h2>Categorie</h2>
                        <ul>
                            <?php for($i=0; $i<count($categories); $i++){ ?>
                                <li <?php if($categories[$i]['idcategorie']==$categorieActu){
                                    echo "class='selectionner'";
                                } ?>><?php 
                                if($categories[$i]['idcategorie']!=$categorieActu){
                                    echo "<a href='".site_url("listeObjet/mesObjets/".$categories[$i]['idcategorie'])."'>".$categories[$i]['nom']."</a>";
                                }else{
                                echo $categories[$i]['nom'];
                                } ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 all_objet">
                    <?php for($i=0; $i<count($liste); $i++){
                        if($liste[$i]["idCategorie"]!=$categorieActu){
                            continue;
                        } ?>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 objet_group">
                            <a href="<?php echo site_url("ficheObjet/modifObjet/".$liste[$i]['idObject']); ?>">
                                <div class="image_categorie">
                                    <img src="<?php echo site_url("assets/img/imgObjet/".$liste[$i]['images'][0]['urlImage']); ?>" alt="" style="width: 300px; height:350px">
                                </div>

                                <div class="info_objet">
                                    <p><?php echo $liste[$i]['titre']; ?></p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
