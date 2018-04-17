<!DOCTYPE html>
<!-- Ici nous avons le code html de notre page de connexion -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
        <script href="../../lib/jquery/jquery-3.3.1.min.js"></script>
    </head>
    <body style="background-color: lightslategray;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center">Connexion</h1>
                </div>
                <div class="modal-body">
                    <form class="col-md-12 center-block" method="post">
                        <div class="form-group">
                            <input type="text" name="Identifier" class="form-control input-group-lg" placeholder="Identifiant">
                        </div>
                        <div class="form-group">
                            <input type="password" name="Password" class="form-control input-group-lg" placeholder="Mot de passe">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-lg btn-primary" value="Connexion">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
