<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Formulaire</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/style_formulaire.css">
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form method="post" action="" autocomplete="off" class="sign-in-form">
                        <div class="heading">
                            <h2>Bienvenue</h2>
                            <h6>Rentrez le champ suivant</h6>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input 
                                type="number" 
                                minlength="4" 
                                class="input-field"
                                name="num"
                                autocomplete="off"
                                required
                                />
                                <label>Numéro</label>
                            </div>

                            <input type="submit" value="Supprimer" class="sign-btn" name="submit">
                            <input type="button" value="Retour" class="sign-btn" onclick="window.location.href='accueil.html'">

                            <p class="text">
                                Les informations entrées seront enregistrées dans la base de données
                            </p>
                        </div>
                    </form>
                    <?php
                        require_once('classe.php');
                        if(isset($_POST['submit']))
                        {
                            $bons = new Utilisation();
                            $bons->supprimer($_POST['num']);
                        }
                    ?>
                </div>

                <div class="illustration">
                    <div class="images-wrapper">
                        <img src="img/launch.svg" class="image img-1" alt="">
                        <div class="text-group">
                            <h2>Manipulation des données</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Javascript fichier -->
    <script src="js/formulaire.js"></script>

</body>
</html>