<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Formulaire</title>
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
                            <h6>Rentrez les champs suivants</h6>
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

                            <div class="input-wrap">
                                <input 
                                type="text" 
                                minlength="4" 
                                class="input-field"
                                name="nom"
                                autocomplete="off"
                                required
                                />
                                <label>Nom</label>
                            </div>

                            <div class="input-wrap">
                                <input 
                                type="text" 
                                minlength="4" 
                                class="input-field" 
                                name="prenom"
                                autocomplete="off"
                                required
                                />
                                <label>Prénom</label>
                            </div>

                            <input type="submit" value="Modifier" class="sign-btn" name="submit">
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
                            $bonso = new Utilisation();
                            $bonso->modifier($_POST['num'], $_POST['nom'], $_POST['prenom']);
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