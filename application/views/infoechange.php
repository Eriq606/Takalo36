<section class="acceptation_echange">
        <div class="container">
            <div class="row">
                <div class="accept_echange">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="image_echange">
                            <img src="<?php echo site_url("assets/img/imgObjet/".$objetSend["images"][0]["urlImage"]); ?>" alt="" style="width: 300px; height:350px">
                        </div>

                        <div class="info_image_echange">
                            <p class="w-ld-50"><?php echo $objetSend["titre"]; ?></p>
                        </div>

                        <div class="user">
                            <p><?php echo $sender["nom"]; ?></p>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="image_echange">
                            <img src="<?php echo site_url("assets/img/imgObjet/".$objetDemand["images"][0]["urlImage"]); ?>" alt="" style="width: 300px; height:350px">
                        </div>
                        
                        <div class="info_image_echange">
                            <p class="w-ld-50"><?php echo $objetDemand["titre"]; ?></p>
                        </div>

                        <div class="user">
                            <p><?php echo $receiver["nom"]; ?></p>
                        </div>
                    </div>
                </div>

                <?php if($sender["idutilisateur"]!=$this->session->userActu["idutilisateur"]){ ?>
                <div class="button_accept_refus_echange">
                    <div class="button_accept_echange">
                        <a href="<?php echo site_url("/invitations/accepter/".$idInvite."/".$sender["idutilisateur"]."/".$objetSend["idObject"]."/".$receiver["idutilisateur"]."/".$objetDemand["idObject"]); ?>"><button>Accepter</button></a>
                    </div>

                    <div class="button_refus_echange">
                    <a href="<?php echo site_url("/invitations/refuser/".$idInvite); ?>"><button>Refuser</button></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>