<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Inscription.css"/>
    <title>Inscription</title>
</head>
<body>
<div class="gauche"><img src="images/PageConnexion.jpg" alt="Photo page de connexion"/></div>
<div class="droite">
    <div class="Texte" id="Inscription"> Inscription</div>
    <div class="Texte" id="SousTexteInscription"> Remplissez les champs ci-dessous pour compléter votre incription</div>
    <div class="ChampsDeConnexion">
        <div class="Box" id="Box1">
            <form id="FormPrenom" method="post" action="traitement.php">
                <p><input type="text" class = "MoitierInput" placeholder="Prénom" size="20"></p>
            </form>
            <div class="PetiteBarre" alt="Barre design"></div>
            <form id="FormNom" method="post" action="traitement.php">
                <p><input type="text" class ="MoitierInput" placeholder="Nom" size="20"></p>
            </form>
            <div class="PetiteBarre" alt="Barre design"></div>
        </div>
        <form id="Mdp" method="post" action="traitement.php">
            <p><input type="password" placeholder="Mot de passe" size="40"></p>
        </form>
        <div class="Barre" alt="Barre design"></div>
        <form class="Email" method="post" action="traitement.php">
            <p><input type="email" placeholder="E-mail" size="40"/></p>
        </form>
        <div class="Barre" id="barre3" alt="Barre design"></div>
        </div>
<!--        <input type="checkbox" id="RestezConnecte" name="RestezConnecte"/>-->
<!--        <label for="RestezConnecte">Rester connecté</label>-->
<!--        <a class="Bouton" id="BoutonInscription" href="Inscription.php">Inscription</a>-->
</div>
</body>
</html>