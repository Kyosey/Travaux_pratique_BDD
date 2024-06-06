<?php // PHP 5

//-----------------------------------------//
//  CLASSE CONNEXION
//-----------------------------------------//

// Classe mère Connexion
class Connexion
{
    private  $connexion=NULL;
    protected $dbh;

	// Permet de se connecter à la base de données "[insérer le nom de la base]"
	function __construct()
	{
        try 
        {
            $user = 'root';
            $pass = 'root';
            $dbname = 'monsite';
            $dbhost = 'localhost';

            $this->dbh = new PDO("mysql:host=".$dbhost."; dbname=".$dbname, $user, $pass, array(PDO::ATTR_PERSISTENT=>true));
        } 
        catch (PDOException $e) 
        {
            exit();
        }
    }
}


//-----------------------------------------//
//  CLASSE UTILISATION
//-----------------------------------------//

// Classe fille Utilisation
class Utilisation extends Connexion
{
   	// Permet au client de se créer un compte qui sera enregistré dans la base de données "[insérer le nom de la base]"
    function ajouter($num, $nom, $prenom)
    {
        // Référence à la base de donnée
        $dbh = $this->dbh;

        // Préparation de la requête
        $reqsql = $dbh->prepare("INSERT INTO client (NumClient, NomClient, PreClient) VALUES (:num, :nom, :prenom)");

        // Execution de la requête
        $reqsql->execute(array(
            ":num" => $num,
            ":nom" => $nom,
            ":prenom" => $prenom
        ));
    }
    
	// Permet au client de supprimer son compte de la base de données "[insérer le nom de la base]"
    function supprimer($num)
    {
        // Référence à la base de donnée
        $dbh = $this->dbh;

        // Préparation de la requête
        $reqsql = $dbh->prepare("DELETE FROM client WHERE client.NumClient =:num ");

        // Execution de la requête
        $reqsql->execute(array(
            ":num" => $num
        ));
    }

    // Permet au client d'avoir un aperçu de tous les clients enregistrés dans la base de données "[insérer le nom de la base]"
    function afficher()
    {
        // Référence à la base de donnée
        $dbh = $this->dbh;

        // Création de la requête
        $reqsql = $dbh->prepare("SELECT * FROM client order by NumClient");

        // Exécution de la requête
        $reqsql->execute();

        while($result = $reqsql->fetch())
        {
            echo "<tr><td>" .$result['NumClient'] ."</td><td>" .$result['NomClient'] ."</td><td>" .$result['PreClient'] ."</td></tr>";
        }
    }

    // Permet au client de modifier tous ses paramètres dans la base de données "[insérer le nom de la base]"
    function modifier($num, $nom, $prenom)
    {
        // Référence à la base de donnée
        $dbh = $this->dbh;

        // Préparation de la requête
        $reqsql = $dbh->prepare("UPDATE client SET NumClient =:num, NomClient =:nom, PreClient =:prenom WHERE client.NumClient =:num ");

        // Execution de la requête
        $reqsql->execute(array(
            ":num" => $num,
            ":nom" => $nom,
            ":prenom" => $prenom
        ));
    }
}

?>