<?php
include ('class.php');
 $nom = $_POST[ 'Nom'];
 $prenom = $_POST [ 'Prenom'];
 $filiere = $_POST [ 'filiere'];
 $DateNaissance = $_POST [ 'Date_naissance'];
 $sexe = $_POST [ 'sexe'];
 $Boursier = $_POST [ 'Boursier'];
 
 if ($sexe=="F") {
     echo" Votre nom est $nom et votre prenom $prenom vous etes nee le $dateNaissance de sexe feminin";
 } 
 else{
    echo "Vous etes un homme destine a epouser une femme et vous appele $nom $prenom";
 }

 $etudiant1 = new Etudiant($nom,$prenom,$DateNaissance,$Sexe,$filiere,$boursier);
 $etudiant1->afficherEtudiant();
 $etudiant1->fichier();

 ?>