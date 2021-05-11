<?php 
    class etudiant
    {
        private $nom;
        private $prenom;
        private $DateNaissance;
        private $Sexe;
        private $filiere;
        private $boursier;

        public function __construct ($nom,$prenom,$DateNaissance,$Sexe,$filiere,$boursier){
            $this-> nom = $nom;
            $this-> prenom = $nom;
            $this-> DateNaissance = $DateNaissance;
            $this-> sexe = $sexe;
            $this-> filiere = $filiere;
            $this-> boursier = $boursier;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getprenom(){
            return $this-> prenom;
        }

        public function getDateNaissance(){
            return $this-> getDateNaissance;
        }

        public function getSexe(){
            return $this-> sexe;

        }

        public function getfiliere(){
            return $this-> filiere;
        }

        public function getboursier(){
            return $this-> boursier;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }
        public function setDateNaissance($DateNaissance){
            $this->DateNaissance = $DateNaissance;
        }
         
        public function setSexe($sexe){
            $this->sexe = $sexe;
        }

        public function setFiliere($filiere){
            $this->filiere = $filiere;
        }

        public function setBoursier($Boursier){
            $this->boursier = $Boursier;
        }


        public function afficherEtudiant(){

            echo "Vous etes etudiant du nom $this->nom et de $this-> prenom";

        }

    public function fichier ($nom,$prenom,$DateNaissance,$Sexe,$filiere,$boursier) {
        $file = fopen ('etudiant.txt','w');
        fwrite ( $file, "           nom: $nom \n
                                    prenom: $prenom \n
                                    Date de naissance : $DateNaissance \n
                                    sexe: $sexe \n
                                    filiere: $filiere \n
                                    boursier: $Boursier \n    "
    );
fclose($file);

    }

}
?>
    

