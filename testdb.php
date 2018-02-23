<?php
							// Déclaration des paramètres de connexion
							$host = "localhost";

							$user = "root";

							$bdd = "db0";

							$passwd  = "sst001";

							// Connexion au serveur
							$connect = mysql_connect($host, $user,$passwd) or die("erreur de connexion au serveur");
							//echo $connect.'<br>';
							mysql_select_db($bdd) or die("erreur de connexion a la base de donnees");
?>
