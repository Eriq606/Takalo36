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
                <a href="historique.php">Historique</a>
            </div>
        </div>
    </header>


    <section class="acceptation_echange">
        <div class="container">
            <div class="row">
                <div class="accept_echange">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="image_echange">
                            <img src="<?php echo site_url("assets/img/imgObjet/".$objetSend["images"][0]["urlImage"]); ?>" alt="">
                        </div>

                        <div class="info_image_echange">
                            <p class="w-ld-50">Q<?php echo $objetSend["titre"]; ?></p>
                        </div>

                        <div class="user">
                            <p><?php echo $sender["nom"]; ?></p>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="image_echange">
                            <img src="<?php echo site_url("assets/img/imgObjet/".$objetDemand["images"][0]["urlImage"]); ?>" alt="">
                        </div>
                        
                        <div class="info_image_echange">
                            <p class="w-ld-50"><?php echo $objetDemand["titre"]; ?></p>
                        </div>

                        <div class="user">
                            <p><?php echo $receiver["nom"]; ?></p>
                        </div>
                    </div>
                </div>

                <div class="button_accept_refus_echange">
                    <div class="button_accept_echange">
                        <a href="<?php echo site_url(""); ?>"><button>Accepter</button>
                    </div>

                    <div class="button_refus_echange">
                        <button>Refuser</button>
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