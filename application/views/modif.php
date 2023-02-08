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

    <section class="body_Info_categorie">
        <div class="container">

            <div class="row">

                <div class="Info_categorie">

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 list_categorie">
                            <div class="image_objet">
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6 list_image_objet">
                                    <p>image 1</p>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 list_image_objet">
                                    <p>image 2</p>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 list_image_objet">
                                    <p>image 3</p>
                                </div>
                            </div>
                        </div>

                        <form action="" method="get">

                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 modif_object">
                                <div class="titre">
                                    <input value="<?php echo $objet['titre']; ?>" type="text" class="form-control" placeholder="Titre">
                                </div>

                                <div class="info">
                                    <input value="<?php echo $objet['description']; ?>" type="text" class="form-control" placeholder="Description">
                                </div>
                                
                                <div class="prix">
                                    <input value="<?php echo $objet['prixEstimatif']; ?>" type="number" class="form-control" placeholder="Prix">
                                </div>

                                <button type="submit">Valider</button>

                            </div>
                        </form>


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