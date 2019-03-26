<!DOCTYPE html>
<html>
<head>
		<title>VARIABLES</title>
</head>
<body>
	<h1>Mes variables PHP</h1>
	<h5>J'ai donc pu trouver 4 types de variables en php</h3>

 <?php

 $nom = "FALANA";    // Type string (chaine de caractères)
 $age = 20;    // Type entier(nombres entiers)
 $des = 5e-1;    // Type réels/floats
 $un = true;  // Type booléen
 $cours = array("leadership","management","informatique"); // Type tableau

 echo "Moi je suis $nom et je bois $des litres d'eau par jour,j'ai $age ans et ceci est donc $un aperçu<br>"; 
 //echo "Je fais" .$cours[0]. "," .$cours[1]. "et" .$cours[2].;

 ?>

</body>
</html>