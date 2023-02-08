<section class="invitation_echange">
    <div class="container">
        <div class="row">
        <div class="list_echange">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title_invitation">
                    <h2>Historique de l'objet: <?php echo $objet["titre"]; ?></h2>
                </div>
            </div>


            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Ancien proprietaire</th>
                        <th>Nouveau proprietaire</th>
                        <th>Date et heure</th>
                    </tr>
                </thead>

                <tbody>
                    <?php for($i=0; $i<count($listeInvit); $i++){ ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo $senders[$i]['nom']; ?></p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo $receivers[$i]['nom']; ?></p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo $listeInvit[$i]['dateInvite']." ".$listeInvit[$i]['heureInvite']; ?></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
              </table>
        </div>
        </div>
    </div>
</section>