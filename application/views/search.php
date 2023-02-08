<section class="body_Info_categorie">
        <div class="container">
            <div class="row">
                <div class="Info_categorie">
                    <form action="" method="post">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 search">
                            <div class="d-flex justify-content-center h-100">
                                <div class="searchbar">
                                    <input class="search_input" type="text" name="search" placeholder="Search...">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 search">
                                <div class="select_categorie">
                                    <select name="search_cat" id="">
                                        <?php for($i=0; $i<count($categories); $i++){ ?>
                                        <option value="<?php echo $categories[$i]["idcategorie"]; ?>"><?php echo $categories[$i]["nom"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 search">
                                <div class="button_searh">
                                    <button type="submit">Rechercher</button>
                                </div>
                        </div>
                    </form>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 all_objet">
                    <?php for($i=0; $i<count($liste); $i++){ 
                        if($liste[$i]["idUtilisateur"]==$this->session->userActu["idutilisateur"]){
                            continue;
                        } ?>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 objet_group">
                            <a href="<?php echo site_url("ficheObjet/showObjet/".$liste[$i]['idObject']); ?>">
                                <div class="image_categorie">
                                    <img src="<?php echo site_url("assets/img/imgObjet".$liste[$i]['images'][0]['urlImage']); ?>" alt="" style="width: 300px; height:350px">
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
