<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("./assets/css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("./assets/css/style.css"); ?>">  
    <title>Modif</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nav-item">
                <a href="categorie.php">Categorie</a>
                <a href="">Home</a>
                <a href="objet.php">Mes Objets</a>
                <a href="invitation.php">Invitations</a>
            </div>
        </div>
        <hr>
    </header>

    <section class="body_Info_categorie">
        <div class="container">

            <div class="row">

                <div class="Info_categorie">

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 list_categorie">
                            <div class="image_objet">
                                <?php for($i=0; $i<count($objet['images']); $i++){ ?>
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6 list_image_objet">
                                    <img src="<?php echo site_url("assets/img/imgObjet/".$objet['images'][$i]['urlImage']); ?>">
                                </div>
                                <?php } ?>
                            </div>
                        </div>


                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 information_object">
                                <div class="titre">
                                    <h2><?php echo $objet['titre']; ?></h2>
                                </div>

                                <div class="info">
                                    <p><?php echo $objet['description']; ?></p>
                                </div>
                                
                                <div class="prix">
                                    <label for="">Prix : <?php echo $objet['prixEstimatif']; ?></label>
                                </div>
                                <?php if(!$envoye){ ?>
                                <a href="<?php echo site_url("choixObjet/choixObjet/".$objet['idObject']."/".$objet['idUtilisateur']); ?>"><button>Proposer Echange</button></a>
                                <?php } ?>
                            </div>

                </div>
            </div>
        </div>
        
    </section>


    <footer>
        <div class="footer">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="copyright">
                    <p>© 2023 Copyright</p>
                </div>

                <div class="etu">
                    <div class="etu_name">
                        <p>NY Avo</p>
                        <p>ETU001783</p>
                    </div>
                    <div class="etu_name">
                        <p>Kenzo</p>
                        <p>ETU001777</p>
                    </div>
                    <div class="etu_name">
                        <p>Mahefa</p>
                        <p>ETU001877</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>