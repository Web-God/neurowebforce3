<?php
// définition des constantes
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "bucket_list");    

	try {
		//Crée un objet PDO
		$dbh = new PDO(
			'mysql:host='.DBHOST.';dbname='.DBNAME,  //dsn[data source name]
			DBUSER, //username
			DBPASS, //mot de passe
			array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //pour communiquer en utf8 avec le serveur
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //on veut recevoir des arrays associatifs dans les requêtes SELECT
				PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING //on veut afficher toutes les erreurs
			)
		);
	} catch (PDOException $e) {
	    echo 'Erreur de connexion : ' . $e->getMessage();
	}//Attention de ne pas laisser d'espace ou de ligne vide après le code => source de bug ou piratage