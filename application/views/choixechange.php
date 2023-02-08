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
                                <?php for($i=0; $i<count($mesObjets); $i++){ ?>
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6 list_image_objet">
                                    <a href="<?php echo site_url("choixObjet/changeObjet/".$mesObjets[$i]['idObject']."/".$idAutreObjet."/".$idAutre); ?>">
                                    <div class="image_categorie">
                                        <img src="<?php echo $mesObjets[$i]['images'][0]['urlImage']; ?>" alt="">
                                    </div>

                                    <div class="info_objet">
                                        <p><?php echo $mesObjets[$i]['titre']; ?></p>
                                    </div>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 object_choose">
                            <div class="valid_object">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image_categorie">
                                    <img src="<?php echo $mesObjets[$objetActu]['images'][0]['urlImage']; ?>" alt="">
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
                                </div>
                            </div>
                            <a href="<?php echo site_url("proposer/index/".$this->session->userActu["idutilisateur"]."/".$mesObjets[$objetActu]["idObject"]."/".$idAutre."/".$idAutreObjet); ?>"><button>Valider</button></a>
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