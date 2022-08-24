<?php

// Connexion a la BDD
$connexion = new PDO ('mysql:host=tpdocumentaliste.mariadb.database.azure.com;dbname=presentation','clement@tpdocumentaliste','Clecle0202.');
#$servername = "tpphpsql-server.mysql.database.azure.com";
#$username = "bsanvicyde";
#$password = "3LAU1Q5QK1I4LCQ3$";
#$dbname = "tpphpsql-database";

#$conn= mssql_connect($servername,$username,$password, $dbname);
// On va chercher l'entrer dans la bdd
$search = stripslashes($_POST["titre"]);
$requete = $connexion->query("SELECT * FROM articles WHERE titre like '".$search."'");

// On affiche le resultat
echo "Voici les resultats pour " .$search. " :";
while($data = $requete->fetch()){
        echo "<h1>".$data['titre']."</h1>";
        echo "<p>".$data['texte']."</p>";
}

// On tue kill la  requete
$requete->closeCursor();

?>

