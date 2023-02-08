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
                <a href="<?php echo site_url("listeObjet/index/1"); ?>">Home</a>
                <?php if(isset($this->session->userActu["admin"])){ ?>
                    <a href="<?php echo site_url("homepage"); ?>">Categories</a>
                    <a href="<?php echo site_url(""); ?>">Statistiques</a>
                <?php }else{ ?>
                    <a href="<?php echo site_url("listeObjet/mesObjets"); ?>">Mes Objets</a>
                    <a href="<?php echo site_url("invitations/listeInvit"); ?>">Invitations</a>
                <?php } ?>
            </div>
        </div>
    </header>