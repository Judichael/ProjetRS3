<?php
$Serveur= "localhost";
$login = "root";

try{
$connexion = new PDO("mysql:host=$Serveur;dbname=etudiant_ist",$login);
$connexion -> setAttribute (PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Connexion reussie';

$requete =$connexion -> prepare(
    "INSERT INTO etudiant (Nom,Prenom,DateNaissance, Sexe ,Filiere,Boursier) VALUES
    (:nom,:prenom,:DateNaissance,:Sexe,:filiere,:Boursier)"
);
$requete ->bindParam(':nom',$nom);
$requete ->bindParam(':prenom',$prenom);
$requete ->bindParam(':DateNaissance',$DateNaissance);
$requete ->bindParam(':Sexe',$sexe);
$requete ->bindParam(':Filiere',$filiere);
$requete ->bindParam(':Boursier',$Boursier);

$nom = "PARKOUDA";
$prenom = "Judichael";
$DateNaissance = "to_date('2018-08-13','yyyy-MM-dd')";
$sexe = "Masculin";
$filiere = "Reseau et systeme informatique";
$Boursier = "Oui";

}
catch(PDOException $e){
    echo'Echec de la connexion : ' .$e ->getMessage();
}
?>