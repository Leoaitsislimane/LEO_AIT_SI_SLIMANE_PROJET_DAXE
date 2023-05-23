<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>SHARE</title>
</head>
<body>
    <main>
    <h1>Créer un compte!</h1>
    <?php

require "template/database.php";

$requete = $database->prepare("SELECT * FROM inscription");

$requete->execute();

$tweet = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<?php

$requete = $database->prepare("SELECT * FROM inscription");

$requete->execute();

$twitter = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
        
        
        <?php foreach($twitter as $tw) { ?>
            <div class="info">
                <h1> <?= $tw['pseudo'] ?> </h1>
                <p>nom : <?= $tw['nom'] ?> </p>
                <p>mail : <?= $tw['mail'] ?> </p>
                <p>mdp : <?= $tw['MDP'] ?> </p>
            </div>

        <?php } ?> 


        <form class="inscription" method="POST" action="insert.php">
            <input type="text" name="nom" placeholder="Nom et prénom" >
            <input type="text" name="Pseudo" placeholder="Pseudo" >
            <input type="text" name="mail" placeholder="mail" >
            <input type="password" name="MDP" placeholder="mot de passe" >
            
            <button type="submit">Envoyer</button>
        </form>
<br>
<br>
<button class="twitte">
    <a href="tweet.php">Tweeter ici!</a>
</button>
        
       

    </main>
</body>
</html>