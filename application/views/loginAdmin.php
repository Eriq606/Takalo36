<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="<?php echo site_url("assets/css/bootstrap.css"); ?>">
    <link rel="stylesheet" type='text/css' href="<?php echo site_url("assets/css/style.css"); ?>">
    <title>Login</title>
</head>
    <body>
    <div class="container">
        <div class="row">
            <div class="body_log_insc">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="title_categorie">
                            <h2>Login</h2>
                            <p class="w-ld-50">Connectez-vous pour acceder a votre compte et profiter de toutes les fonctionnalites</p>
                        <hr>
                        </div>
                    </div>

                <form action="<?php echo site_url("identify/logAdmin"); ?>" method="post">
                    <div class="log_insc">
                        <div class="input_email">
                            <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">
                            <label for="inputEmail3" class=" col-form-label">Email</label>
                            </div>
                            <div class="col-sm-10 col-xs-10 col-md-10 col-lg-10">
                                <input value='root' type="text" class="form-control" placeholder="Email" name='email'>
                            </div>
                        </div>


                        <div class="input_mdp">
                            <label class="col-sm-2 col-form-label">Mot De Passe</label>
                            <div class="col-sm-10">
                            <input value='root' type="password" class="form-control" placeholder="Mot De Passe" name='pass'>
                            </div>
                        </div>
                    </div>

                    <button type="submit">Se Connecter</button>
                </form>

                <a href="<?php echo site_url("login/loginAdmin"); ?>">Se connecter en tant qu'admin</a>
            </div>
        </div>
    </div>
</body>
</html>