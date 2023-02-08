    <section class="categorie">
        <div class="container">
            <div class="row">
                <div class="body_categorie">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="title_categorie">
                            <h2>Categorie</h2>
                            <p class="w-ld-50">Explorez notre vaste sélection de produits regroupés par catégories pour trouver ce qui vous convient le mieux</p>
                        </div>
                    </div>
                    <?php for($i=0; $i<count($allCategories); $i++){ ?>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 form_group">
                        <div class="number_categorie">
                            <h2 class="h2">Categorie <?php echo $i; ?></h2>
                        </div>

                        <div class="name_categorie">
                            <h3><?php echo $allCategories[$i]['nom']; ?></h3>
                            <p>Categorie</p>
                        </div>

                        <div class="button_categorie">
                            <a href="listeObjet/index/<?php echo $allCategories[$i]['idcategorie']; ?>"><button>Voir</button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>