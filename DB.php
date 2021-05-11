<?php
$Serveur= "localhost";
$login = "root";

try{
$connexion = new PDO("mysql:host=$Serveur;dbname=Etudiant_Ist",$login);
$connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ATTR_ERRMODE_EXCEPTION);
echo 'Connexion reussie';
}
catch(PDOException $e){
    echo'Echec de la connexion : ' .$e ->getMessage();
}
?>