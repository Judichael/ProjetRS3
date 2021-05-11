<html>
<head>
<meta charset="utf-8">
<title>Formulaire</title>
<link href="Formulairecss.css" rel="stylesheet" media="all" type="text/css">

</head>

<body>

    <form method="post" action="CONNEXION1.php" class="form" >
        <h2><p class="titre">Infos Etudiant</p></h2>

        <fieldset  id="Infos_Etudiant"><br/><br/><br/><br/>
        <LAbel> Nom </LAbel> <input type="text" name="Nom" placeholder="Entrer votre nom"/> <br/><br/><br/><br/>
        <LAbel>Prenom </LAbel> <input type="text" name="Prenom" placeholder="Entrer votre Prenom"/> <br/><br/><br/><br/>
        <LAbel>DateNaissance </LAbel> <input type="date" name="Date_naissance" placeholder="Entrer votre date de naisssance"/><br/><br/><br/>
        <LAbel>Sexe </LAbel> <select name= "sexe">
            <option value="M">Masculin</option>                 
            <option value="F">Feminin</option>
            <option value="NULL">Autre</option>
        </select><br/><br/><br/><br/>
        <LAbel>Filiere </LAbel>  <select name="filiere">
            <option value="RSI">Reseau et systeme informatique (RSI)</option>
            <option value="GBM">Genie biomedical(GBM)</option>
            <option value="AA">Agro-alimentaire(AA)</option>
            <option value="EII">Electronique informatique industrielle(EII)</option>
            <option value="NHA">Nutrition humaine applique (NHA)</option>
            <option value="GC">Genie civil(GC)</option>
        
        </select><br/><br/><br/><br/>
        <LAbel>Boursier </LAbel>: <input type="radio" name="Boursier" value="Oui"/>Oui
        <input type="radio" name="Boursier" value="Non"/>Non<br/><br/><br/><br/>
         <button type="submit">Envoyer</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="reset">Recommencer</button>
        </fieldset>
        
        <form/>
</body>
<style type = "test/css">
*{
    margin: 0;
    padding :0;
}
<body>{
    background-image: url (image.jpg);
    background-position: center;
    background-size:cover;
    font-family:sans-serif;
    
}
    
</style>
</html>
