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
							
							
							
							
							
							
							
							
							
							
							
							
							
							$sql = 'SELECT count(*) AS cpt FROM `etat_ligne` WHERE etat = "up" AND ligne LIKE "1/1/2/%"';
							//$vb = mysql_result($sql);
							
							$row=mysql_fetch_array(mysql_query($sql));
							$cpt = $row['cpt'];
							
							echo $cpt.'test';
							
							
						
							
							
							
?>



